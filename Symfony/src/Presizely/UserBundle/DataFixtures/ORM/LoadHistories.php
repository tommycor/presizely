<?php
// src/Presizely/UserBundle/DataFixtures/ORM/LoadHistories.php
/*
namespace Presizely\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Presizely\UserBundle\Entity\History;
use Presizely\UserBundle\Entity\Article;
use Presizely\UserBundle\Entity\User;

class LoadHistories implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $history = new History;

    $user = new User;

    $article = new Article;

    // Le nom d'utilisateur et le mot de passe sont identiques
    $history->setGrade(3);
    $date = new \Datetime();
    $history->setDate($date);
    $history->setUser($user);
    $history->setArticle($article);

    //$em = $this->getDoctrine()->getManager();
    $manager->persist($article);

    // On déclenche l'enregistrement
    $manager->flush();
  }
}*/