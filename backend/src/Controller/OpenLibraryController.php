<?php

namespace App\Controller;

use App\Entity\Books;
use App\Service\OpenLibraryService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class OpenLibraryController extends AbstractController
{
    private $openLibraryService;

    public function __construct(OpenLibraryService $openLibraryService)
    {
        $this->openLibraryService = $openLibraryService;
    }

    #[Route('/search-books', name: 'search_books', methods: ['GET'])]
    public function searchBooks(Request $request)
    {
        $query = $request->query->get('query');

        $books = [];
        if ($query) {
            try {
                $books = $this->openLibraryService->searchBooks($query);
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while searching for books.');
            }
        }

        return $this->render('open_library/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/book-details/{olid}', name: 'book_details', methods: ['GET'])]
    public function getBookDetails(string $olid): JsonResponse
    {
        try {
            $details = $this->openLibraryService->getBookDetails($olid);
            return new JsonResponse($details);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/add-book', name: 'add_book', methods: ['POST'])]
    public function addBook(Request $request, EntityManagerInterface $entityManager)
    {

        $title = $request->request->get('title');
        $authorsData = $request->request->get('authors');
        $imageCover = $request->request->get('imageCover');

        $authorsArray = [];
        if (!empty($authorsData)) {
            if (is_array($authorsData)) {
                // Si c'est déjà un tableau (ex: envoyé via authors[])
                $authorsArray = $authorsData;
            } else {
                // Si c'est une chaîne (ex: "Auteur A, Auteur B"), on la transforme
                $authorsArray = array_map('trim', explode(',', (string)$authorsData));
            }
        } else {
            $authorsArray = ['Auteur inconnu'];
        }

        $book = new Books();
        $book->setTitle($title);
        $book->setAuthors($authorsArray);
        $book->setImageCover($imageCover);

        $book->setReadingStatus('to_read');
        $book->setRating(0);

        $entityManager->persist($book);
        $entityManager->flush();

        $this->addFlash('success', 'Livre ajouté !');
        return $this->redirectToRoute('app_books_index');
    }

}
