<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'encabezado' => 'Inicio',
            'titulo' => 'Bienvenidos a la página principal',
        ]);
    }
    #[Route('/home/noticias', name: 'noticias')]
    public function noticias(): Response
    {
        return $this->render('home/noticias.html.twig', [
            'encabezado' => 'Noticias',
            'titulo' => 'Bienvenidos a la sección de noticias',
        ]);
    }
    #[Route('/home/nosotros', name: 'nosotros')]
    public function nosotros(): Response
    {
        return $this->render('home/nosotros.html.twig', [
            'encabezado' => 'Sobre nosotros',
            'titulo' => 'Conoce más sobre nosotros!'
        ]);
    }
  
}