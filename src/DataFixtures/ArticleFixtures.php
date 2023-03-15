<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use app\entity\article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       for($i=1;$i<=10;$i++){
        $article = new article();
        $article -> settitle("titre de l 'artcile n°$i")
                 -> setContent("<p>contenu de l 'article n°$i</p>")
                 -> setImage("http://placehold.it/350x150")
                 ->setCreateAt(new \DateTimeImmutable());
        $manager ->Persist($article);
                }
        $manager->flush();
    }
}
