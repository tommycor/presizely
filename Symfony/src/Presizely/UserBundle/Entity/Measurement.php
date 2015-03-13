<?php
// src/Presizely/UserBundle/Entity/Measurement.php

namespace Presizely\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Measurement
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="tour_tete", type="integer", nullable=true)
   */
  private $tete_tete;
  /**
   * @ORM\Column(name="tete_cou", type="integer", nullable=true)
   */
  private $tete_cou;
  /**
   * @ORM\Column(name="buste_epaule", type="integer", nullable=true)
   */
  private $buste_epaule;
  /**
   * @ORM\Column(name="buste_poitrine", type="integer", nullable=true)
   */
  private $buste_poitrine;
  /**
   * @ORM\Column(name="main_poignet", type="integer", nullable=true)
   */
  private $main_poignet;
  /**
   * @ORM\Column(name="main_main", type="integer", nullable=true)
   */
  private $main_main;
  /**
   * @ORM\Column(name="jambe_hanche", type="integer", nullable=true)
   */
  private $jambe_hanche;
  /**
   * @ORM\Column(name="jambe_fesse", type="integer", nullable=true)
   */
  private $jambe_fesse;
  /**
   * @ORM\Column(name="pied_longueur", type="integer", nullable=true)
   */
  private $pied_longueur;
  /**
   * @ORM\Column(name="pied_largeur", type="integer", nullable=true)
   */
  private $pied_largeur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tete_tete
     *
     * @param integer $teteTete
     * @return Measurement
     */
    public function setTeteTete($teteTete)
    {
        $this->tete_tete = $teteTete;

        return $this;
    }

    /**
     * Get tete_tete
     *
     * @return integer 
     */
    public function getTeteTete()
    {
        return $this->tete_tete;
    }

    /**
     * Set tete_cou
     *
     * @param integer $teteCou
     * @return Measurement
     */
    public function setTeteCou($teteCou)
    {
        $this->tete_cou = $teteCou;

        return $this;
    }

    /**
     * Get tete_cou
     *
     * @return integer 
     */
    public function getTeteCou()
    {
        return $this->tete_cou;
    }

    /**
     * Set buste_epaule
     *
     * @param integer $busteEpaule
     * @return Measurement
     */
    public function setBusteEpaule($busteEpaule)
    {
        $this->buste_epaule = $busteEpaule;

        return $this;
    }

    /**
     * Get buste_epaule
     *
     * @return integer 
     */
    public function getBusteEpaule()
    {
        return $this->buste_epaule;
    }

    /**
     * Set buste_poitrine
     *
     * @param integer $bustePoitrine
     * @return Measurement
     */
    public function setBustePoitrine($bustePoitrine)
    {
        $this->buste_poitrine = $bustePoitrine;

        return $this;
    }

    /**
     * Get buste_poitrine
     *
     * @return integer 
     */
    public function getBustePoitrine()
    {
        return $this->buste_poitrine;
    }

    /**
     * Set main_poignet
     *
     * @param integer $mainPoignet
     * @return Measurement
     */
    public function setMainPoignet($mainPoignet)
    {
        $this->main_poignet = $mainPoignet;

        return $this;
    }

    /**
     * Get main_poignet
     *
     * @return integer 
     */
    public function getMainPoignet()
    {
        return $this->main_poignet;
    }

    /**
     * Set main_main
     *
     * @param integer $mainMain
     * @return Measurement
     */
    public function setMainMain($mainMain)
    {
        $this->main_main = $mainMain;

        return $this;
    }

    /**
     * Get main_main
     *
     * @return integer 
     */
    public function getMainMain()
    {
        return $this->main_main;
    }

    /**
     * Set jambe_hanche
     *
     * @param integer $jambeHanche
     * @return Measurement
     */
    public function setJambeHanche($jambeHanche)
    {
        $this->jambe_hanche = $jambeHanche;

        return $this;
    }

    /**
     * Get jambe_hanche
     *
     * @return integer 
     */
    public function getJambeHanche()
    {
        return $this->jambe_hanche;
    }

    /**
     * Set jambe_fesse
     *
     * @param integer $jambeFesse
     * @return Measurement
     */
    public function setJambeFesse($jambeFesse)
    {
        $this->jambe_fesse = $jambeFesse;

        return $this;
    }

    /**
     * Get jambe_fesse
     *
     * @return integer 
     */
    public function getJambeFesse()
    {
        return $this->jambe_fesse;
    }

    /**
     * Set pied_longueur
     *
     * @param integer $piedLongueur
     * @return Measurement
     */
    public function setPiedLongueur($piedLongueur)
    {
        $this->pied_longueur = $piedLongueur;

        return $this;
    }

    /**
     * Get pied_longueur
     *
     * @return integer 
     */
    public function getPiedLongueur()
    {
        return $this->pied_longueur;
    }

    /**
     * Set pied_largeur
     *
     * @param integer $piedLargeur
     * @return Measurement
     */
    public function setPiedLargeur($piedLargeur)
    {
        $this->pied_largeur = $piedLargeur;

        return $this;
    }

    /**
     * Get pied_largeur
     *
     * @return integer 
     */
    public function getPiedLargeur()
    {
        return $this->pied_largeur;
    }
}
