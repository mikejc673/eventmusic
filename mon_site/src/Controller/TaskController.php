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

    #[Route('/task/new', name: 'task_new')]
    public function new(EntityManagerInterface $em, \Symfony\Component\HttpFoundation\Request $request): Response
    {
        $task = new Task();
        $form = $this->createForm(\App\Form\TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($task);
            $em->flush();
            return $this->redirectToRoute('task_list');
        }

        return $this->render('task_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/task/{id}/edit', name: 'task_edit')]
    public function edit(Task $task, EntityManagerInterface $em, \Symfony\Component\HttpFoundation\Request $request): Response
    {
        $form = $this->createForm(\App\Form\TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('task_list');
        }

        return $this->render('task_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
