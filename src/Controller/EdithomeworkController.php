<?php

namespace App\Controller;

use Symfony\Component\Form\FormInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Homework;

class EdithomeworkController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function edit($id): Response
    {
        $homework = $this->entityManager->getRepository(Homework::class)->find($id);

        return $this->render('edithomework/edit.html.twig', [
            'homework' => $homework,
        ]);
    }

    public function update(Request $request, Homework $homework): Response
    {
        $name = $request->request->get('name');
        $description = $request->request->get('description');
        $datelimite = $request->request->get('datelimite');

        $homework->setName($name);
        $homework->setDescription($description);
        $homework->setDatelimite(new \DateTime($datelimite)); 

        $entityManager = $this->entityManager;
        
        $entityManager->persist($homework);

        $entityManager->flush();

        return $this->redirectToRoute('popup_content');
    }

    public function delete(Request $request, Homework $homework): Response
    {
        $entityManager = $this->entityManager;
        
        $entityManager->remove($homework);

        $entityManager->flush();

        return $this->redirectToRoute('popup_content');
    }
}