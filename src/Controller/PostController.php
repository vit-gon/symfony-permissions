<?php

namespace App\Controller;

use App\Entity\Post;
use App\Security\Voter\PermisssionVoter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     * @return Response
     */
    public function index(): Response
    {
        if ($this->isGranted('POST_VIEW', PermisssionVoter::PERMISSION)) {
            dd("We can view post!");
        } else {
            dd("You shall not pass!");
        }
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
