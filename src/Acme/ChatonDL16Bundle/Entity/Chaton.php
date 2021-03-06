<?php

namespace Acme\ChatonDL16Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chaton
 *
 * @ORM\Table(name="chaton")
 * @ORM\Entity(repositoryClass="Acme\ChatonDL16Bundle\Repository\ChatonRepository")
 */
class Chaton
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=50)
     */
    private $qualite;

    /**
     * @var string
     *
     * @ORM\Column(name="marque_croquettes", type="string", length=150)
     */
    private $marqueCroquettes;


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
     * Set nom
     *
     * @param string $nom
     * @return Chaton
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set qualite
     *
     * @param string $qualite
     * @return Chaton
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return string 
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set marqueCroquettes
     *
     * @param string $marqueCroquettes
     * @return Chaton
     */
    public function setMarqueCroquettes($marqueCroquettes)
    {
        $this->marqueCroquettes = $marqueCroquettes;

        return $this;
    }

    /**
     * Get marqueCroquettes
     *
     * @return string 
     */
    public function getMarqueCroquettes()
    {
        return $this->marqueCroquettes;
    }
}
