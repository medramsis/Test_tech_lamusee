<?php

// src/Controller/ImageController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Image;
use App\Form\ImageType;

class ImageController extends AbstractController
{
    /**
     * @Route("/upload-image", name="upload_image")
     */
    public function uploadImage(Request $request)
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($image);
            $entityManager->flush();

            return $this->redirectToRoute('upload_image');
        }

        return $this->render('upload_image.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
