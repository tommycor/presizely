<?php

namespace Presizely\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class History
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
    * @ORM\Column(name="grade", type="integer", nullable=true)
    */
    private $grade;

    /**
    * @ORM\Column(name="date", type="datetime")
    */
    protected $date;

    /**
    * @ORM\ManyToOne(targetEntity="Presizely\UserBundle\Entity\User", inversedBy="histories")
    */
    protected $user;

    /**
    * @ORM\ManyToOne(targetEntity="Presizely\ProductsBundle\Entity\Article")
    */
    protected $article;


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
     * Set grade
     *
     * @param integer $grade
     * @return History
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return History
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \Presizely\UserBundle\Entity\User $user
     * @return History
     */
    public function setUser(\Presizely\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Presizely\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set article
     *
     * @param \Presizely\ProductsBundle\Entity\Article $article
     * @return History
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
}
