<?php

namespace Presizely\ProductsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partener
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Partener
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
    * @ORM\Column(name="name", type="string", length=255, unique=true)
    */
    private $name;


    /**
    * @ORM\Column(name="domain", type="string", length=255, unique=true)
    */
    private $domain;


    /**
    * @ORM\Column(name="URL", type="string", length=255, unique=true)
    */
    private $URL;


    /**
    * @ORM\Column(name="siret", type="string", length=45, unique=true)
    */
    private $siret;


    /**
    * @ORM\Column(name="mail", type="string", length=255, unique=true)
    */
    private $mail;


    /**
    * @ORM\Column(name="nom_contact", type="string", length=255, unique=true)
    */
    private $nom_contact;


    /**
    * @ORM\ManyToMany(targetEntity="Presizely\ProductsBundle\Entity\Article")
    */
    private $article;


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
     * @return Partener
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
     * Set domain
     *
     * @param string $domain
     * @return Partener
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set URL
     *
     * @param string $uRL
     * @return Partener
     */
    public function setURL($uRL)
    {
        $this->URL = $uRL;

        return $this;
    }

    /**
     * Get URL
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Set siret
     *
     * @param string $siret
     * @return Partener
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Partener
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nom_contact
     *
     * @param string $nomContact
     * @return Partener
     */
    public function setNomContact($nomContact)
    {
        $this->nom_contact = $nomContact;

        return $this;
    }

    /**
     * Get nom_contact
     *
     * @return string 
     */
    public function getNomContact()
    {
        return $this->nom_contact;
    }

    /**
     * Set article
     *
     * @param \Presizely\ProductsBundle\Entity\Article $article
     * @return Partener
     */
    public function setArticle(\Presizely\ProductsBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Presizely\ProductsBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \Presizely\ProductsBundle\Entity\Article $article
     * @return Partener
     */
    public function addArticle(\Presizely\ProductsBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Presizely\ProductsBundle\Entity\Article $article
     */
    public function removeArticle(\Presizely\ProductsBundle\Entity\Article $article)
    {
        $this->article->removeElement($article);
    }
}
