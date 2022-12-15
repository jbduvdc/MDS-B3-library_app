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

        $books = [
        ['category' => 'Low fantasy', 'title' => 'Harry Potter', 'author' => 'J. K. Rowling', 'date'=>'9 octobre 1998', 'price' => 24],
        ['category' => 'Southern gothic', 'title' => '16 lunes', 'author' => ' Kami Garcia et Margaret Stohl', 'date'=> '1er décembre 2009', 'price' => 42],
        ['category' => 'Science-fiction', 'title' => 'Le Labyrinthe', 'author' => 'James Dashner', 'date'=> '21 octobre 2009', 'price' => 17.5]
    ];

        return $this->render('books/index.html.twig', [
            "title" => $title,
            "books" => $books
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