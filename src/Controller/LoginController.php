<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Homework;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;

class LoginController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function login(Request $request, SessionInterface $session): Response
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $user = $this->entityManager->getRepository(Users::class)->findOneBy(['name' => $username]);

        if ($user && $password === $user->getPassword()) {
            $session->set('user_name', $user->getName());
            $session->set('user_status', $user->getStatus());
            $session->set('user_id', strval($user->getId()));

            if ($user->getStatus() === 'a') {
                return $this->redirectToRoute('admin_dashboard');
            } else {
                return $this->redirectToRoute('authenticated_page');
            }
        }

        return $this->redirectToRoute('app_homepage');
    }
    public function authenticatedPage(SessionInterface $session): Response
    {
        if (!$session->has('user_name')) {
            return $this->redirectToRoute('app_homepage');
        }

        $userName = $session->get('user_name');
        $userStatus = $session->get('user_status');
        $userId = $session->get('user_id');
        $homeworks = $this->entityManager->getRepository(Homework::class)->findBy([], ['datelimite' => 'ASC']);

        return $this->render('authenticated_page.html.twig', [
            'user_name' => $userName,
            'user_id' => $userId,
            'user_status' => $userStatus,
            'homeworks' => $homeworks
        ]);
    }
}
?>