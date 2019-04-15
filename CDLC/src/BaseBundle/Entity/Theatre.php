<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theatre
 *
 * @ORM\Table(name="theatre", indexes={@ORM\Index(name="idacteur_fk", columns={"idacteur_fk"})})
 * @ORM\Entity
 */
class Theatre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_scene", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idScene;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_scene", type="string", length=50, nullable=false)
     */
    private $titreScene;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var \Acteur
     *
     * @ORM\ManyToOne(targetEntity="Acteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idacteur_fk", referencedColumnName="id_acteur")
     * })
     */
    private $idacteurFk;

    /**
     * @return int
     */
    public function getIdScene()
    {
        return $this->idScene;
    }

    /**
     * @param int $idScene
     */
    public function setIdScene($idScene)
    {
        $this->idScene = $idScene;
    }

    /**
     * @return string
     */
    public function getTitreScene()
    {
        return $this->titreScene;
    }

    /**
     * @param string $titreScene
     */
    public function setTitreScene($titreScene)
    {
        $this->titreScene = $titreScene;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \Acteur
     */
    public function getIdacteurFk()
    {
        return $this->idacteurFk;
    }

    /**
     * @param \Acteur $idacteurFk
     */
    public function setIdacteurFk($idacteurFk)
    {
        $this->idacteurFk = $idacteurFk;
    }


}

