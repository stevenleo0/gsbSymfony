<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="Visiteur", indexes={@ORM\Index(name="fk_delegue", columns={"delegue"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\VisiteurRepository")
 */
class Visiteur
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
     * @ORM\Column(name="vis_matricule", type="string", length=3, nullable=true)
     */
    private $visMatricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vis_nom", type="string", length=30, nullable=true)
     */
    private $visNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vis_prenom", type="string", length=30, nullable=true)
     */
    private $visPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vis_adresse", type="string", length=30, nullable=true)
     */
    private $visAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vis_cp", type="string", length=30, nullable=true)
     */
    private $visCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vis_ville", type="string", length=30, nullable=true)
     */
    private $visVille;

    /**
     * @var \Delegue
     *
     * @ORM\ManyToOne(targetEntity="Delegue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delegue", referencedColumnName="id")
     * })
     */
    private $delegue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisMatricule(): ?string
    {
        return $this->visMatricule;
    }

    public function setVisMatricule(?string $visMatricule): self
    {
        $this->visMatricule = $visMatricule;

        return $this;
    }

    public function getVisNom(): ?string
    {
        return $this->visNom;
    }

    public function setVisNom(?string $visNom): self
    {
        $this->visNom = $visNom;

        return $this;
    }

    public function getVisPrenom(): ?string
    {
        return $this->visPrenom;
    }

    public function setVisPrenom(?string $visPrenom): self
    {
        $this->visPrenom = $visPrenom;

        return $this;
    }

    public function getVisAdresse(): ?string
    {
        return $this->visAdresse;
    }

    public function setVisAdresse(?string $visAdresse): self
    {
        $this->visAdresse = $visAdresse;

        return $this;
    }

    public function getVisCp(): ?string
    {
        return $this->visCp;
    }

    public function setVisCp(?string $visCp): self
    {
        $this->visCp = $visCp;

        return $this;
    }

    public function getVisVille(): ?string
    {
        return $this->visVille;
    }

    public function setVisVille(?string $visVille): self
    {
        $this->visVille = $visVille;

        return $this;
    }

    public function getDelegue(): ?Delegue
    {
        return $this->delegue;
    }

    public function setDelegue(?Delegue $delegue): self
    {
        $this->delegue = $delegue;

        return $this;
    }


}
