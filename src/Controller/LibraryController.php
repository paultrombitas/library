<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class LibraryController extends Controller
{
    /**
     * @Route("/", name="", methods="GET")
     */
    public function index(BookRepository $bookRepository, AuthorRepository $authorRepository): Response
    {
        return $this->render('library/index.html.twig', ['books' => $bookRepository->findAll(), 'authors' => $authorRepository->findAll()]);
    }
}
