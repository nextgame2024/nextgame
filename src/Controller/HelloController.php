<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Entity\UserProfile;
use App\Repository\CommentRepository;
use App\Repository\MicroPostRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    private array $messages = [
        ['message' => 'Hello', 'created' => '2024/06/12'],
        ['message' => 'Hi', 'created' => '2022/04/12'],
        ['message' => 'created', 'created' => '2021/05/12'],
    ];

    // #[Route('/{limit<\d+>?3}', name: 'app_index')]
    #[Route('/', name: 'app_index')]
    public function index(MicroPostRepository $posts, CommentRepository $comments, UserProfileRepository $profiles, EntityManagerInterface $entityManager): Response
    {

        // $post = new MicroPost();
        // $post->setTitle('Hello');
        // $post->setText('Hello');
        // $post->setCreated(new DateTime());

        // $post = $posts->find(1);
        // // $post->getComments()->count();
        // $comment = $post->getComments()[0];
        // $post->removeComment($comment);
        // $entityManager->persist($post);
        // $entityManager->flush();


        // $comment = new Comment();
        // $comment->setText('Hello');
        // $comment->setPost($post);
        // // $post->addComment($comment);
        // $entityManager->persist($comment);
        // $entityManager->flush();


        // OneToOne
        // $user = new User();
        // $user->setEmail('email@gmail.com');
        // $user->setPassword('1234567');

        // $profile = new UserProfile();
        // $profile->setUser($user);
        // $entityManager->persist($user);
        // $entityManager->persist($profile);
        // $entityManager->flush();

        return $this->render(
            'hello/index.html.twig',
            [
                'messages' => $this->messages,
            ],
        );
    }

    #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
    public function showOne($id): Response
    {
        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id]
            ]
        );
    }
}
