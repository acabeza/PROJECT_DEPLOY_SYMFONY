<?php

namespace App\Controller;
use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(UsersRepository $usersRepository, ProductRepository $productRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'users' => $usersRepository->findAll(),
            'products' => $productRepository->findAll(),
        ]);
    }
}
