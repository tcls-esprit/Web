<?php

namespace MuseeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Visite
 *
 * @ORM\Table(name="visite", indexes={@ORM\Index(name="id_guide", columns={"id_guide"})})
 * @ORM\Entity
 */
class Visite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_visite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\GreaterThan("today")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_debut", type="time", nullable=false)
     * @Assert\LessThan(propertyPath="hFin")
     */
    private $hDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_fin", type="time", nullable=false)
     * @Assert\GreaterThan(propertyPath="hDebut")
     */
    private $hFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \MuseeBundle\Entity\Guide
     *
     * @ORM\ManyToOne(targetEntity="Guide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_guide", referencedColumnName="id")
     * })
     */
    private $idGuide;



    /**
     * Get idVisite
     *
     * @return integer
     */
    public function getIdVisite()
    {
        return $this->idVisite;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Visite
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
     * Set hDebut
     *
     * @param \DateTime $hDebut
     *
     * @return Visite
     */
    public function setHDebut($hDebut)
    {
        $this->hDebut = $hDebut;

        return $this;
    }

    /**
     * Get hDebut
     *
     * @return \DateTime
     */
    public function getHDebut()
    {
        return $this->hDebut;
    }

    /**
     * Set hFin
     *
     * @param \DateTime $hFin
     *
     * @return Visite
     */
    public function setHFin($hFin)
    {
        $this->hFin = $hFin;

        return $this;
    }

    /**
     * Get hFin
     *
     * @return \DateTime
     */
    public function getHFin()
    {
        return $this->hFin;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Visite
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idGuide
     *
     * @param \MuseeBundle\Entity\Guide $idGuide
     *
     * @return Visite
     */
    public function setIdGuide(\MuseeBundle\Entity\Guide $idGuide = null)
    {
        $this->idGuide = $idGuide;

        return $this;
    }

    /**
     * Get idGuide
     *
     * @return \MuseeBundle\Entity\Guide
     */
    public function getIdGuide()
    {
        return $this->idGuide;
    }
}
