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
     * @var integer
     *
     * @ORM\Column(name="id_salle", type="integer", nullable=false)
     */
    private $idSalle;

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


}

