<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAdminController extends AbstractController
{

    /**
     * @Route("/admrights", name="app_admini")
     */
    public function stronastartowa(EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Article::class);
        $article = $repository->findAll();
        return $this->render('admrights/admini.html.twig',[
            'article'=> $article,
        ]);
    }
    /**
     * @Route("/admrights/new")
     */
    public function newArt(EntityManagerInterface $em)
    {
        $article =new Article();
        $article->setTitle('Kot w butach');
        $article->setSlug('kot-w-butach'.rand(100,999));
        $article->setContent("Dawno dawno temu Kot..");
        $article->setSubtitle("Subtitle...");
        $article->setCreatedAt(new \DateTime());
        $article->setUser($this->faker->user);
        $article->setCategory($this->faker->category);

        $em->persist($article);
        $em->flush();
        return new Response(sprintf('Powstał nowy Artykuł o id: #%d i slugiem: %s',
                $article->getId(),
                $article->getSlug()
        ));
    }



}
