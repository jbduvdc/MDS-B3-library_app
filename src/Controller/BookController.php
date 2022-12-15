<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BookController extends AbstractController
{
    #[Route('/books', name: 'books_home')]
    public function home(): Response
    {
        $title = "Tous les livres";
        return $this->render('books/index.html.twig', [
            "title" => $title
        ]);
    }

    #[Route('/books/{id}', name: 'books_single')]
    public function single_book($id): Response
    {
        $title = "Mon livre";
        return $this->render('books/single.html.twig', [
            "title" => $title,
            "id" => $id
        ]);
    }


    #[Route('/contact', name: 'books_contact')]
    public function contact(): Response
    {
        $title = "Me contacter";
        return $this->render('books/contact.html.twig', [
            "title" => $title
        ]);
    }
}