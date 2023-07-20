<?php

namespace App\Controller;

use App\Entity\Image;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $images = $entityManager->getRepository(Image::class)->findAll();

        return $this->render('home/index.html.twig', [
            'images' => $images,
        ]);
    }

    
}

