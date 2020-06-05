<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoefConfiance
 *
 * @ORM\Table(name="Coef_confiance")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CoefConfianceRepository")
 */
class CoefConfiance
{
    /**
     * @var int
     *
     * @ORM\Column(name="coef_num", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coefNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coef_libelle", type="string", length=30, nullable=true)
     */
    private $coefLibelle;

    public function getCoefNum(): ?int
    {
        return $this->coefNum;
    }

    public function getCoefLibelle(): ?string
    {
        return $this->coefLibelle;
    }

    public function setCoefLibelle(?string $coefLibelle): self
    {
        $this->coefLibelle = $coefLibelle;

        return $this;
    }


}
