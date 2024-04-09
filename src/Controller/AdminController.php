<?php
// src/Controller/AdminController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Users;
use App\Entity\Classe; 

class AdminController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function dashboard(): Response
    {
        return $this->render('admin/dashboard.html.twig', [
        ]);
    }

    public function addClass(Request $request): Response
    {
        $requestData = json_decode($request->getContent(), true);

        $classe = new Classe();
        $classe->setNom($requestData['name']);

        $this->entityManager->persist($classe);
        $this->entityManager->flush();

        return $this->json(['message' => 'Class added successfully'], Response::HTTP_CREATED);
    }

    public function addStudent(Request $request): Response
    {
        $requestData = json_decode($request->getContent(), true);

        $student = new Users();
        $student->setName($requestData['name']);
        $student->setPassword($requestData['password']);
        $student->setStatus('e'); 

        $classId = $requestData['class_id'];

        $class = $this->entityManager->getRepository(Classe::class)->find($classId);

        $student->setClasse($class);

        $this->entityManager->persist($student);
        $this->entityManager->flush();

        return $this->json(['message' => 'Student added successfully'], Response::HTTP_CREATED);
    }

    public function addTeacher(Request $request): Response
    {
        $requestData = json_decode($request->getContent(), true);

        $student = new Users();
        $student->setName($requestData['name']);
        $student->setPassword($requestData['password']);
        $student->setStatus('p');
        $this->entityManager->persist($student);
        $this->entityManager->flush();

        return $this->json(['message' => 'Student added successfully'], Response::HTTP_CREATED);
    }

    public function addClasse(Request $request): Response
    {
        $requestData = json_decode($request->getContent(), true);

        $classe = new Classe();
        $classe->setNom($requestData['name']);
        $this->entityManager->persist($classe);
        $this->entityManager->flush();

        return $this->json(['message' => 'Classe added successfully'], Response::HTTP_CREATED);
    }

    public function classesContent(): Response
    {
        $classesRepository = $this->entityManager->getRepository(Classe::class);

        $classes = $classesRepository->findAll();

        return $this->render('admin/classes.html.twig', [
            'classes' => $classes,
        ]);
    }

    public function studentContent(): Response
    {
        $userRepository = $this->entityManager->getRepository(Users::class);

        $usersE = $userRepository->findBy(['status' => 'e']);

        return $this->render('admin/student.html.twig', [
            'usersE' => $usersE,
        ]);
    }

    public function teachersContent(): Response
    {
        $usersRepository = $this->entityManager->getRepository(Users::class);

        $usersP = $usersRepository->findBy(['status' => 'p'], ['name' => 'ASC']);

        return $this->render('admin/teachers.html.twig', [
            'usersP' => $usersP,
        ]);
    }

    public function editTeacher(Request $request, $id): Response
    {
        $entityManager = $this->entityManager;
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé avec l\'ID: ' . $id);
        }

        $requestData = json_decode($request->getContent(), true);

        $user->setName($requestData['name']);
        $user->setPassword($requestData['password']);

        $entityManager->flush();

        return $this->json(['message' => 'Utilisateur mis à jour avec succès'], Response::HTTP_OK);
    }

    public function getTeacher($id): Response
    {
        $entityManager = $this->entityManager;
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé avec l\'ID: ' . $id);
        }

        $userData = [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'password' => $user->getPassword()
        ];

        return $this->json($userData, Response::HTTP_OK);
    }

    public function deleteUser($id): Response
    {
        $entityManager = $this->entityManager;
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé avec l\'ID: ' . $id);
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->json(['message' => 'Utilisateur supprimé avec succès'], Response::HTTP_OK);
    }

    public function deleteClasse($id): Response
    {
        $entityManager = $this->entityManager;
        $user = $entityManager->getRepository(Classe::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Classe non trouvé avec l\'ID: ' . $id);
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->json(['message' => 'Classe supprimé avec succès'], Response::HTTP_OK);
    }
}
