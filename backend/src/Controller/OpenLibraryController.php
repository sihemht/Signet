<?php

namespace App\Controller;

use App\Entity\Books;
use App\Service\OpenLibraryService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
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

    #[Route('/add-book', name: 'add_book', methods: ['POST'])]
    public function addBook(Request $request, EntityManagerInterface $entityManager)
    {
        // 1. Récupère la clé du livre et les infos de base
        $workKey = $request->request->get('openLibraryKey');
        $title = $request->request->get('title');
        $imageCover = $request->request->get('imageCover');
        $isbn = $request->request->get('isbn');
        $authorsRaw = $request->request->get('authors');

        // 2. Appel au service pour récupérer le résumé (Work)
        $workDetails = $this->openLibraryService->getWorkDetails($workKey);

        // 3. Extraction de la description (Résumé)
        $description = "Aucun résumé disponible pour ce livre.";
        if (!empty($workDetails) && isset($workDetails['description'])) {
            if (is_array($workDetails['description'])) {
                $description = $workDetails['description']['value'] ?? $description;
            } else {
                $description = $workDetails['description'];
            }
        }

        // 4. Extraction des sujets (Catégories)
        $subjects = [];
        if (!empty($workDetails) && isset($workDetails['subjects'])) {
            // On prend les 8 premiers sujets pour ne pas surcharger
            $subjects = array_slice($workDetails['subjects'], 0, 8);
        }

        $book = new Books();
        $book->setTitle($title);
        $book->setImageCover($imageCover);
        $book->setDescription($description);
        $book->setSubjects($subjects);
        $book->setIsbn($isbn ?: 'Non précisé');

        // Gestion des auteurs (conversion string -> array si besoin)
        $authorsArray = is_array($authorsRaw) ? $authorsRaw : array_map('trim', explode(',', (string)$authorsRaw));
        $book->setAuthors($authorsArray);

        // Valeurs par défaut
        $book->setReadingStatus('to_read');
        $book->setRating(0);

        // 6. Sauvegarde en base de données
        $entityManager->persist($book);
        $entityManager->flush();

        $this->addFlash('success', '📚 "' . $title . '" a été enrichi et ajouté à ta bibliothèque !');

        return $this->redirectToRoute('app_books_index');
    }
    #[Route('/book-details/{olid}', name: 'book_details', methods: ['GET'])]
    public function getBookDetails(string $olid): JsonResponse
    {
        // Utilise  getWorkDetails car c'est elle qui contient le résumé
        $details = $this->openLibraryService->getWorkDetails($olid);

        // Si c'est vide, on renvoie quand même un message pour aider le JS
        if (empty($details)) {
            return new JsonResponse(['description' => 'Aucun résumé trouvé sur Open Library.'], 200);
        }

        return new JsonResponse($details);
    }

}
