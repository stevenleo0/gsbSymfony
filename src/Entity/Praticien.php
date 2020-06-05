<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Praticien
 *
 * @ORM\Table(name="Praticien", indexes={@ORM\Index(name="fk_typ_code", columns={"typ_code"}), @ORM\Index(name="fk_vis_id", columns={"vis_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PraticienRepository")
 */
class Praticien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cp", type="string", length=30, nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=true)
     */
    private $ville;

    /**
     * @var float|null
     *
     * @ORM\Column(name="coefNotoriete", type="float", precision=10, scale=0, nullable=true)
     */
    private $coefnotoriete;

    /**
     * @var \TypePraticien
     *
     * @ORM\ManyToOne(targetEntity="TypePraticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typ_code", referencedColumnName="typ_code")
     * })
     */
    private $typCode;

    /**
     * @var \Visiteur
     *
     * @ORM\ManyToOne(targetEntity="Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vis_id", referencedColumnName="id")
     * })
     */
    private $vis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCoefnotoriete(): ?float
    {
        return $this->coefnotoriete;
    }

    public function setCoefnotoriete(?float $coefnotoriete): self
    {
        $this->coefnotoriete = $coefnotoriete;

        return $this;
    }

    public function getTypCode(): ?TypePraticien
    {
        return $this->typCode;
    }

    public function setTypCode(?TypePraticien $typCode): self
    {
        $this->typCode = $typCode;

        return $this;
    }

    public function getVis(): ?Visiteur
    {
        return $this->vis;
    }

    public function setVis(?Visiteur $vis): self
    {
        $this->vis = $vis;

        return $this;
    }


}
