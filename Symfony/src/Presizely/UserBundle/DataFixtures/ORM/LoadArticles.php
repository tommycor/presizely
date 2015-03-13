<?php
// src/Presizely/UserBundle/DataFixtures/ORM/LoadArticles.php

namespace Presizely\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Presizely\UserBundle\Entity\Article;

class LoadArticles implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('shirt1', 'shirt2', 'shirt3');

    foreach ($listNames as $key => $name) {
      // On crée l'utilisateur
      $article = new Article;

      // Le nom d'utilisateur et le mot de passe sont identiques
      $article->setName($name);
      $article->setSizeFrLetter("XL");
      $article->setSizeUsLetter("XL");
      $article->setSizeUs(24);
      $article->setSizeFR(48);
      $article->setSizeUs($name);
      $article->setType("Chemise");
      $article->setBusteEpaule(50);
      $article->setBustePoitrine(40);

      //$em = $this->getDoctrine()->getManager();
      $manager->persist($article);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}