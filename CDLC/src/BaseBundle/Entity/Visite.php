<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="h_debut", type="integer", nullable=false)
     */
    private $hDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="h_fin", type="integer", nullable=false)
     */
    private $hFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \Guide
     *
     * @ORM\ManyToOne(targetEntity="Guide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_guide", referencedColumnName="id")
     * })
     */
    private $idGuide;

    /**
     * @return int
     */
    public function getIdVisite()
    {
        return $this->idVisite;
    }

    /**
     * @param int $idVisite
     */
    public function setIdVisite($idVisite)
    {
        $this->idVisite = $idVisite;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getHDebut()
    {
        return $this->hDebut;
    }

    /**
     * @param int $hDebut
     */
    public function setHDebut($hDebut)
    {
        $this->hDebut = $hDebut;
    }

    /**
     * @return int
     */
    public function getHFin()
    {
        return $this->hFin;
    }

    /**
     * @param int $hFin
     */
    public function setHFin($hFin)
    {
        $this->hFin = $hFin;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return \Guide
     */
    public function getIdGuide()
    {
        return $this->idGuide;
    }

    /**
     * @param \Guide $idGuide
     */
    public function setIdGuide($idGuide)
    {
        $this->idGuide = $idGuide;
    }


}

