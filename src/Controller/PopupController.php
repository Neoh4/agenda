<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface; 
use App\Entity\Homework;

class PopupController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function popupContent(): Response
    {
        $homeworks = $this->entityManager->getRepository(Homework::class)->findAll();

        return $this->render('popup/content.html.twig', [
            'homeworks' => $homeworks,
        ]);
    }
}