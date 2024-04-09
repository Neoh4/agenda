<?php

// src/Controller/HomeworkController.php

namespace App\Controller;

use App\Entity\Homework;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeworkController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function addUser(Request $request): Response
    {
       
        $requestData = json_decode($request->getContent(), true);
    
        $user = new User();
        $user->setName($requestData['name']); 
        $user->setPassword($requestData['password']);
        $user->setStatus($requestData['status']);
    
        $this->entityManager->persist($user);
    
        $this->entityManager->flush();
    
        return $this->json(['message' => 'User added successfully'], Response::HTTP_CREATED);
    }
}