<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController
{
    #[Route('/')]
    public function homepage ():Response
    {
        return new Response('hello world');
    }

    #[Route('/products/{id}')]
    public function test ($id):Response
    {
        return new Response('The product id is: '.$id);
    }

    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        return new Response('I am a blog');
    }

}