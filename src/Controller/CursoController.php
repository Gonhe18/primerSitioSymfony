<?php

namespace App\Controller;

use App\Entity\Cursos;
use App\Form\CursosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CursoController extends AbstractController
{
    #[Route('/curso', name: 'index')]
    public function index(): Response
    {
        return $this->render('curso/index.html.twig', [
            'titulo' => 'Inicio',
            'bienvenida' => 'Bievenidos al curso de PHP y Symfony',
        ]);
    }
    
    #[Route('/curso/especifico', name: 'cursos')]
    public function especifico(): Response
    {
        $curso = new Cursos();
        $form = $this->createForm( CursosType::class, $curso);

        return $this->render('curso/cursos.html.twig', [
            'titulo' => 'Especifico',
            'bienvenida' => 'Bievenidos al área de cursos',
            'Formulario' => $form->createView(),
        ]);
    }

    #[Route('/curso/especifico/{id}', name: 'nombre')]
    public function nombre($id): Response
    {
        return $this->render('curso/nombre.html.twig', [
            'titulo' => 'Id',
            'id' => $id,
        ]);
    }
}