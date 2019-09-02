<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Zend\I18n\Validator\DateTime;


class ArticleFixtures extends AbstractBaseFixtures
{
    private static $articleTitles = [
        'Why Asteroids Taste Like Bacon',
        'Life on Planet Mercury: Tan, Relaxing and Fabulous',
        'Light Speed Travel: Fountain of Youth or Fallacy',
    ];

    private static $articleSubTitles = [
        'Sub1',
        'LSub2',
        'LSub3y',
    ];

    private static $articleAuthors = [
        'Mike Ferengi',
        'Amy Oort',
    ];

    public function loadData(ObjectManager $manager):void
    {
        $this->createMany(10, '', function(Article $article, $count) use ($manager){
            $article = new Article();
            $article->setTitle($this->faker->word);
            $article->setContent('uip capicola officia. Labore deserunt esse chicken lorem shoulder tail consecteturt');
            $article->setSlug('kot-w-butach'.rand(100,999));
            $article->setSubtitle('Subtitle...');
            $article->setCreatedAt($this->faker->DateTime());



            $comment = new Comment();
            $comment->setAuthor('Mike Ferengi');
            $comment->setContent('I ate a normal rock once. It did NOT taste like bacon!');
            $comment->setArticle($article);

            $comment1 = new Comment();
            $comment1->setAuthor($this->faker->randomElement(self::$articleAuthors));
            $comment1->setContent('with faker!');
            $comment1->setArticle($article);

            return $article;
        });

        $manager->flush();
    }
}
<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Zend\I18n\Validator\DateTime;


class ArticleFixtures extends AbstractBaseFixtures
{
    private static $articleTitles = [
        'Why Asteroids Taste Like Bacon',
        'Life on Planet Mercury: Tan, Relaxing and Fabulous',
        'Light Speed Travel: Fountain of Youth or Fallacy',
    ];

    private static $articleSubTitles = [
        'Sub1',
        'LSub2',
        'LSub3y',
    ];

    private static $articleAuthors = [
        'Mike Ferengi',
        'Amy Oort',
    ];

    public function loadData(ObjectManager $manager):void
    {
        $this->createMany(10, '', function(Article $article, $count) use ($manager){
            $article = new Article();
            $article->setTitle($this->faker->word);
            $article->setContent('uip capicola officia. Labore deserunt esse chicken lorem shoulder tail consecteturt');
            $article->setSlug('kot-w-butach'.rand(100,999));
            $article->setSubtitle('Subtitle...');
            $article->setCreatedAt($this->faker->DateTime());



            $comment = new Comment();
            $comment->setAuthor('Mike Ferengi');
            $comment->setContent('I ate a normal rock once. It did NOT taste like bacon!');
            $comment->setArticle($article);

            $comment1 = new Comment();
            $comment1->setAuthor($this->faker->randomElement(self::$articleAuthors));
            $comment1->setContent('with faker!');
            $comment1->setArticle($article);

            return $article;
        });

        $manager->flush();
    }
}