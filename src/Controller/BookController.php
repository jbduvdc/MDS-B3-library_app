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
        return $this->render('books/index.html.twig');
    }

    #[Route('/contact', name: 'books_contact')]
    public function contact(): Response
    {
        return $this->render('books/contact.html.twig');
    }
}