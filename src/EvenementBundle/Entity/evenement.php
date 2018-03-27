<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Eko\FeedBundle\Item\Writer\RoutedItemInterface;


/**
 * evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\evenementRepository")
 * @Serializer\ExclusionPolicy("ALL")
 */
class evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="communaute", type="string", length=255)
     * @Serializer\Expose
     */

    private $communaute;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;



    /**
     * @var string
     *
     * @ORM\Column(name="nomEvenement", type="string", length=255)
     * @Serializer\Expose
     */
    private $nomEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     * @Serializer\Expose
     */
    private $dateDebut;



    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     * @Serializer\Expose
     */
    private $lieu;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreMax", type="integer")
     * @Serializer\Expose
     */
    private $nombreMax;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomEvenement
     *
     * @param string $nomEvenement
     *
     * @return evenement
     */
    public function setNomEvenement($nomEvenement)
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    /**
     * Get nomEvenement
     *
     * @return string
     */
    public function getNomEvenement()
    {
        return $this->nomEvenement;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }



    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set nombreMax
     *
     * @param integer $nombreMax
     *
     * @return evenement
     */
    public function setNombreMax($nombreMax)
    {
        $this->nombreMax = $nombreMax;

        return $this;
    }

    /**
     * Get nombreMax
     *
     * @return int
     */
    public function getNombreMax()
    {
        return $this->nombreMax;
    }


    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getNomEvenement();
    }


    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return evenement
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set communaute
     *
     * @param string $communaute
     *
     * @return evenement
     */
    public function setCommunaute($communaute)
    {
        $this->communaute = $communaute;

        return $this;
    }

    /**
     * Get communaute
     *
     * @return string
     */
    public function getCommunaute()
    {
        return $this->communaute;
    }


    // RSS

}
