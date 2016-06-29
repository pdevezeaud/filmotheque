<?php

namespace Video\FilmothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="Video\FilmothequeBundle\Repository\filmRepository")
 */
class film
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    Private $categorie;

    /**
     * @ORM\ManyToMany(targetEntity="Acteur")
     * @ORM\JoinTable(name="Film_Acteur")
     */
    Private $acteur;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return film
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acteur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set Categorie
     *
     * @param \Video\FilmothequeBundle\Entity\Categorie $categorie
     *
     * @return film
     */
    public function setCategorie(\Video\FilmothequeBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get Categorie
     *
     * @return \Video\FilmothequeBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add acteur
     *
     * @param \Video\FilmothequeBundle\Entity\Acteur $acteur
     *
     * @return film
     */
    public function addActeur(\Video\FilmothequeBundle\Entity\Acteur $acteur)
    {
        $this->acteur[] = $acteur;

        return $this;
    }

    /**
     * Remove acteur
     *
     * @param \Video\FilmothequeBundle\Entity\Acteur $acteur
     */
    public function removeActeur(\Video\FilmothequeBundle\Entity\Acteur $acteur)
    {
        $this->acteur->removeElement($acteur);
    }

    /**
     * Get acteur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActeur()
    {
        return $this->acteur;
    }
}
