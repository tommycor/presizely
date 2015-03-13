<?php
// src/Presizely/UserBundle/DataFixtures/ORM/LoadUser.php

namespace Presizely\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Presizely\UserBundle\Entity\User;
use Presizely\UserBundle\Entity\Measurement;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Alexandre', 'Marine', 'Anna', 'zizi');

    foreach ($listNames as $key => $name) {
      // On crée l'utilisateur
      $user = new User;

      // Le nom d'utilisateur et le mot de passe sont identiques
      $user->setUsername($name);
      $user->setPassword($name);

      // On ne se sert pas du sel pour l'instant
      //$user->setSalt('');
      // On définit uniquement le role ROLE_USER qui est le role de base
      $user->addRole('ROLE_ADMIN');

      $user->setEmail('plop'.$key);

      $user->setMeasurement();

      $user->setEnabled("zizi");


      // Création de l'entité Image
      $measurement = new measurement();
      $measurement->setMainMain(rand (5, 15));
      $measurement->setJambeHanche(rand (5, 15));
      $measurement->setJambeFesse(rand (5, 15));
      $measurement->setPiedLongueur(rand (5, 15));
      $measurement->setPiedLargeur(rand (5, 15));

      $user->setMeasurement($measurement);

      // On le persiste
      //$em = $this->getDoctrine()->getManager();
      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}