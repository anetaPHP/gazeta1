<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route("/")
     */
 public function stronastartowa()
 {
   return new Response('MOja pierwsza strona');
 }

    /**
     * @Route("/artykul/{slug}")
     */
 public function show($slug)
 {
    return new Response("Przyszla tresc artykulu $slug");
 }
}