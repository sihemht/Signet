<?php

namespace App\Controller;

use App\Entity\Books;
use App\Form\BooksType;
use App\Repository\BooksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Workflow\Registry;


#[Route('/books')]
class BooksController extends AbstractController
{
    #[Route('/', name: 'app_books_index', methods: ['GET'])]
    public function index(BooksRepository $booksRepository): Response
    {
        return $this->render('books/index.html.twig', [
            'books' => $booksRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_books_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Registry $workflows): Response
    {
        $book = new Books();
        $form = $this->createForm(BooksType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Convert authorsText to array and set it in the book entity
            $authorsText = $book->getAuthorsText();
            if ($authorsText) {
                $authorsArray = array_map('trim', explode(',', $authorsText));
                $book->setAuthors($authorsArray);
            }

            // Convert genresText to array and set it in the book entity
            if ($book->getGenresText()) {
                $genresArray = array_map('trim', explode(',', $book->getGenresText()));
                $book->setGenres($genresArray);
            }

            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('app_books_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('books/new.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_books_show', methods: ['GET'])]
    public function show(Books $book): Response
    {
        return $this->render('books/show.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_books_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Books $book, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BooksType::class, $book, ['update' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_books_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('books/edit.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_books_delete', methods: ['POST'])]
    public function delete(Request $request, Books $book, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $book->getId(), $request->request->get('_token'))) {
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_books_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/add-from-api', name: 'add_book', methods: ['POST'])]
    public function addFromApi(Request $request, EntityManagerInterface $entityManager): Response
    {
        $book = new Books();

        // 1. On récupère les données du POST manuellement
        $title = $request->request->get('title');
        $imageCover = $request->request->get('imageCover');
        $authorsRaw = $request->request->get('authors'); // C'est ici que ça arrive en "string"

        // 2. On nettoie et on convertit la chaîne en tableau
        // On gère le cas où l'API envoie "Auteur A, Auteur B"
        $authorsArray = [];
        if (!empty($authorsRaw)) {
            if (is_array($authorsRaw)) {
                $authorsArray = $authorsRaw;
            } else {
                // On découpe la chaîne par la virgule et on nettoie les espaces
                $authorsArray = array_map('trim', explode(',', $authorsRaw));
            }
        }

        // 3. On hydrate l'entité manuellement
        $book->setTitle($title);
        $book->setImageCover($imageCover);
        $book->setAuthors($authorsArray); // On donne enfin un array !

        // On définit des valeurs par défaut pour éviter d'autres erreurs de formulaire
        $book->setReadingStatus('to_read');
        $book->setRating(0);

        $entityManager->persist($book);
        $entityManager->flush();

        $this->addFlash('success', 'Livre ajouté !');

        return $this->redirectToRoute('app_books_index');
    }
}
