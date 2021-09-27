<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;
use App\Repository\BookRepository;
use App\Form\BookType;

class BookController extends AbstractController
{
    /**
     * @Route("book/", name="book", methods={"GET"})
     */
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', [
            'books' => $bookRepository->findAll(),
        ]);
    }

    /**
    * @Route("/new", name="book_new", methods={"GET","POST"})
    */
    public function new(Request $request): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('book');
        }


        return $this->render('book/new.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("show/{id}", name="book_show", methods={"GET"})
    */
    public function show(BookRepository $bookRepository, int $id): Response
    {
        $book = $bookRepository->Find($id);

        return $this->render('book/show.html.twig', [
            'book' => $book,

        ]);
    }

     /**
     * @Route("/{id}/edit", name="book_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Book $book): Response
    {
        $sum =$book->readableSummary();
        $form = $this->createForm(BookType::class, $book, array ('sum'=>$sum));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('book_show', array('id' => $book->getId()));
        }

       

        return $this->render('book/edit.html.twig', [
            'book' => $book,
            
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("/{id}", name="book_delete", methods={"DELETE", "POST"})
    */
    public function delete(Request $request, Book $book): Response
    {
        $entityManager = $this->getDoctrine()->getManager();


        if ($this->isCsrfTokenValid('delete'.$book->getId(), $request->request->get('_token'))) {
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return $this->redirectToRoute('book');
    }
}
