<?php

namespace Presizely\ProductsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article
{
    /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;


    /**
    * @ORM\Column(name="name", type="string", length=255)
    */
    private $name;


    /**
    * @ORM\Column(name="brand", type="string", length=255)
    */
    private $brand;

    /**
   * @ORM\Column(name="type", type="string", length=255)
    */
    private $type;

    /**
    * @ORM\Column(name="coupe", type="string", length=255, nullable=true)
    */
    private $coupe;

    /**
    * @ORM\Column(name="sizeFrLetter", type="string", length=10, nullable=true)
    */
    private $sizeFrLetter;

    /**
    * @ORM\Column(name="sizeUsLetter", type="string", length=10, nullable=true)
    */
    private $sizeUsLetter;

    /**
    * @ORM\Column(name="sizeFr", type="integer", nullable=true)
    */
    private $sizeFr;

    /**
    * @ORM\Column(name="sizeUs", type="integer", nullable=true)
    */
    private $sizeUs;

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
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Article
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set coupe
     *
     * @param string $coupe
     * @return Article
     */
    public function setCoupe($coupe)
    {
        $this->coupe = $coupe;

        return $this;
    }

    /**
     * Get coupe
     *
     * @return string 
     */
    public function getCoupe()
    {
        return $this->coupe;
    }

    /**
     * Set sizeFr
     *
     * @param integer $sizeFr
     * @return Article
     */
    public function setSizeFr($sizeFr)
    {
        $this->sizeFr = $sizeFr;

        return $this;
    }

    /**
     * Get sizeFr
     *
     * @return integer 
     */
    public function getSizeFr()
    {
        return $this->sizeFr;
    }

    /**
     * Set sizUs
     *
     * @param integer $sizeUs
     * @return Article
     */
    public function setSizeUs($sizeUs)
    {
        $this->sizeUs = $sizeUs;

        return $this;
    }

    /**
     * Get sizeUs
     *
     * @return integer 
     */
    public function getSizeUs()
    {
        return $this->sizeUs;
    }

    /**
     * Set tete_tete
     *
     * @param integer $teteTete
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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

    /**
     * Set sizeFrLetter
     *
     * @param string $sizeFrLetter
     * @return Article
     */
    public function setSizeFrLetter($sizeFrLetter)
    {
        $this->sizeFrLetter = $sizeFrLetter;

        return $this;
    }

    /**
     * Get sizeFrLetter
     *
     * @return string 
     */
    public function getSizeFrLetter()
    {
        return $this->sizeFrLetter;
    }

    /**
     * Set sizeUsLetter
     *
     * @param string $sizeUsLetter
     * @return Article
     */
    public function setSizeUsLetter($sizeUsLetter)
    {
        $this->sizeUsLetter = $sizeUsLetter;

        return $this;
    }

    /**
     * Get sizeUsLetter
     *
     * @return string 
     */
    public function getSizeUsLetter()
    {
        return $this->sizeUsLetter;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Article
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
