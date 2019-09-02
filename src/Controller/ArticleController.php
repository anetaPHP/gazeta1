<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Michelf\MarkdownInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Zend\Serializer\Adapter\AdapterInterface;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_stronastartowa")
     */
    public function stronastartowa(EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Article::class);
        $article = $repository->findAll();
        return $this->render('article/home.html.twig',[
            'article'=> $article,
        ]);
    }

    /**
     * @Route("/artykuly/{slug}", name="article_show")
     */
    public function show($slug, EntityManagerInterface $em)
    {
        $repository=$em->getRepository(Article::class);
        /** @var Article $article */
        $article = $repository->findOneBy(['slug'=> $slug]);


        $comment = [
         'komentarz1 ', 'komentarz\2', 'komentarz3',
     ];


        return $this->render('article/show.html.twig', [
        'article' => $article,
        'comment' => $comment
    ]);

}
}
