<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessionfilm
 *
 * @ORM\Table(name="sessionfilm", indexes={@ORM\Index(name="sessionfilm_ibfk_1", columns={"idfilm"}), @ORM\Index(name="sessionfilm_ibfk_2", columns={"idsalle"})})
 * @ORM\Entity
 */
class Sessionfilm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsession", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsession;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=100, nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="datetime", nullable=false)
     */
    private $heure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heurefin", type="datetime", nullable=false)
     */
    private $heurefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \Films
     *
     * @ORM\ManyToOne(targetEntity="Films")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfilm", referencedColumnName="id")
     * })
     */
    private $idfilm;

    /**
     * @var \Salles
     *
     * @ORM\ManyToOne(targetEntity="Salles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsalle", referencedColumnName="id")
     * })
     */
    private $idsalle;

    /**
     * @return int
     */
    public function getIdsession()
    {
        return $this->idsession;
    }

    /**
     * @param int $idsession
     */
    public function setIdsession($idsession)
    {
        $this->idsession = $idsession;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param \DateTime $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    /**
     * @return \DateTime
     */
    public function getHeurefin()
    {
        return $this->heurefin;
    }

    /**
     * @param \DateTime $heurefin
     */
    public function setHeurefin($heurefin)
    {
        $this->heurefin = $heurefin;
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
     * @return \Films
     */
    public function getIdfilm()
    {
        return $this->idfilm;
    }

    /**
     * @param \Films $idfilm
     */
    public function setIdfilm($idfilm)
    {
        $this->idfilm = $idfilm;
    }

    /**
     * @return \Salles
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * @param \Salles $idsalle
     */
    public function setIdsalle($idsalle)
    {
        $this->idsalle = $idsalle;
    }


    public function __toString()
    {
        return "la session" ;
    }
}

