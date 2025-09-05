<?php

namespace App\Controller;

use App\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/task/{id}', name: 'task_show')]
    public function show(Task $task): Response
    {
        return $this->render('article.html.twig', [
            'article' => [
                'titre' => $task->getTask(),
                'contenu' => $task->getDueDate() ? $task->getDueDate()->format('d/m/Y') : '',
                'auteur' => 'Non défini',
            ],
        ]);
    }

    #[Route('/task', name: 'task_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $tasks = $em->getRepository(Task::class)->findAll();
        return $this->render('task_list.html.twig', [
            'tasks' => $tasks,
        ]);
    }
}
