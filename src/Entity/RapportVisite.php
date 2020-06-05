<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapportVisite
 *
 * @ORM\Table(name="Rapport_visite", indexes={@ORM\Index(name="fk_coef_num", columns={"coef_num"}), @ORM\Index(name="fk_praticien", columns={"praticien"}), @ORM\Index(name="fk_visiteur", columns={"visiteur"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\RapportVisiteRepository")
 */
class RapportVisite
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
     * @ORM\Column(name="rap_bilan", type="string", length=30, nullable=true)
     */
    private $rapBilan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rap_datevisite", type="string", length=30, nullable=true)
     */
    private $rapDatevisite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rap_daterapport", type="string", length=30, nullable=true)
     */
    private $rapDaterapport;

    /**
     * @var \CoefConfiance
     *
     * @ORM\ManyToOne(targetEntity="CoefConfiance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coef_num", referencedColumnName="coef_num")
     * })
     */
    private $coefNum;

    /**
     * @var \Praticien
     *
     * @ORM\ManyToOne(targetEntity="Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="praticien", referencedColumnName="id")
     * })
     */
    private $praticien;

    /**
     * @var \Visiteur
     *
     * @ORM\ManyToOne(targetEntity="Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visiteur", referencedColumnName="id")
     * })
     */
    private $visiteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRapBilan(): ?string
    {
        return $this->rapBilan;
    }

    public function setRapBilan(?string $rapBilan): self
    {
        $this->rapBilan = $rapBilan;

        return $this;
    }

    public function getRapDatevisite(): ?string
    {
        return $this->rapDatevisite;
    }

    public function setRapDatevisite(?string $rapDatevisite): self
    {
        $this->rapDatevisite = $rapDatevisite;

        return $this;
    }

    public function getRapDaterapport(): ?string
    {
        return $this->rapDaterapport;
    }

    public function setRapDaterapport(?string $rapDaterapport): self
    {
        $this->rapDaterapport = $rapDaterapport;

        return $this;
    }

    public function getCoefNum(): ?CoefConfiance
    {
        return $this->coefNum;
    }

    public function setCoefNum(?CoefConfiance $coefNum): self
    {
        $this->coefNum = $coefNum;

        return $this;
    }

    public function getPraticien(): ?Praticien
    {
        return $this->praticien;
    }

    public function setPraticien(?Praticien $praticien): self
    {
        $this->praticien = $praticien;

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->visiteur;
    }

    public function setVisiteur(?Visiteur $visiteur): self
    {
        $this->visiteur = $visiteur;

        return $this;
    }


}
