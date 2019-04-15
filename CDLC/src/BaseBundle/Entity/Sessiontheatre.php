<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessiontheatre
 *
 * @ORM\Table(name="sessiontheatre", indexes={@ORM\Index(name="idscene_fk", columns={"idscene_fk"}), @ORM\Index(name="id_salle", columns={"id_salle"})})
 * @ORM\Entity
 */
class Sessiontheatre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ses", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=false)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Theatre
     *
     * @ORM\ManyToOne(targetEntity="Theatre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idscene_fk", referencedColumnName="id_scene")
     * })
     */
    private $idsceneFk;

    /**
     * @var \Salles
     *
     * @ORM\ManyToOne(targetEntity="Salles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_salle", referencedColumnName="id")
     * })
     */
    private $idSalle;

    /**
     * @return int
     */
    public function getIdSes()
    {
        return $this->idSes;
    }

    /**
     * @param int $idSes
     */
    public function setIdSes($idSes)
    {
        $this->idSes = $idSes;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return \Theatre
     */
    public function getIdsceneFk()
    {
        return $this->idsceneFk;
    }

    /**
     * @param \Theatre $idsceneFk
     */
    public function setIdsceneFk($idsceneFk)
    {
        $this->idsceneFk = $idsceneFk;
    }

    /**
     * @return \Salles
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * @param \Salles $idSalle
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;
    }


}

