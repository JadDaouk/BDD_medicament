<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisBdpm
 *
 *
 * @ORM\Table(name="cis_bdpm")
 * @ORM\Entity (repositoryClass="App\Repository\CisBdpmRepository")
 */
class CisBdpm
{
    /**
     * @var int
     *
     * @ORM\Column(name="codeCIS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codecis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="denominationMedicament", type="string", length=500, nullable=true)
     */
    private $denominationmedicament;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formePharmaceutique", type="string", length=500, nullable=true)
     */
    private $formepharmaceutique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="voieAdministrative", type="string", length=500, nullable=true)
     */
    private $voieadministrative;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statutadministratifAMM", type="string", length=500, nullable=true)
     */
    private $statutadministratifamm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeProcedureAMM", type="string", length=500, nullable=true)
     */
    private $typeprocedureamm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etatCommercialisation", type="string", length=500, nullable=true)
     */
    private $etatcommercialisation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateAMM", type="date", nullable=true)
     */
    private $dateamm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statutBDM", type="string", length=500, nullable=true)
     */
    private $statutbdm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeroAutorisationEuropeenne", type="string", length=500, nullable=true)
     */
    private $numeroautorisationeuropeenne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titulaires", type="string", length=500, nullable=true)
     */
    private $titulaires;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="surveillanceRenforcée", type="boolean", nullable=true)
     */
    private $surveillancerenforc�e;

    public function getCodecis(): ?int
    {
        return $this->codecis;
    }

    public function getDenominationmedicament(): ?string
    {
        return $this->denominationmedicament;
    }

    public function setDenominationmedicament(?string $denominationmedicament): self
    {
        $this->denominationmedicament = $denominationmedicament;

        return $this;
    }

    public function getFormepharmaceutique(): ?string
    {
        return $this->formepharmaceutique;
    }

    public function setFormepharmaceutique(?string $formepharmaceutique): self
    {
        $this->formepharmaceutique = $formepharmaceutique;

        return $this;
    }

    public function getVoieadministrative(): ?string
    {
        return $this->voieadministrative;
    }

    public function setVoieadministrative(?string $voieadministrative): self
    {
        $this->voieadministrative = $voieadministrative;

        return $this;
    }

    public function getStatutadministratifamm(): ?string
    {
        return $this->statutadministratifamm;
    }

    public function setStatutadministratifamm(?string $statutadministratifamm): self
    {
        $this->statutadministratifamm = $statutadministratifamm;

        return $this;
    }

    public function getTypeprocedureamm(): ?string
    {
        return $this->typeprocedureamm;
    }

    public function setTypeprocedureamm(?string $typeprocedureamm): self
    {
        $this->typeprocedureamm = $typeprocedureamm;

        return $this;
    }

    public function getEtatcommercialisation(): ?string
    {
        return $this->etatcommercialisation;
    }

    public function setEtatcommercialisation(?string $etatcommercialisation): self
    {
        $this->etatcommercialisation = $etatcommercialisation;

        return $this;
    }

    public function getDateamm(): ?\DateTimeInterface
    {
        return $this->dateamm;
    }

    public function setDateamm(?\DateTimeInterface $dateamm): self
    {
        $this->dateamm = $dateamm;

        return $this;
    }

    public function getStatutbdm(): ?string
    {
        return $this->statutbdm;
    }

    public function setStatutbdm(?string $statutbdm): self
    {
        $this->statutbdm = $statutbdm;

        return $this;
    }

    public function getNumeroautorisationeuropeenne(): ?string
    {
        return $this->numeroautorisationeuropeenne;
    }

    public function setNumeroautorisationeuropeenne(?string $numeroautorisationeuropeenne): self
    {
        $this->numeroautorisationeuropeenne = $numeroautorisationeuropeenne;

        return $this;
    }

    public function getTitulaires(): ?string
    {
        return $this->titulaires;
    }

    public function setTitulaires(?string $titulaires): self
    {
        $this->titulaires = $titulaires;

        return $this;
    }

    public function getSurveillancerenforc�e(): ?bool
    {
        return $this->surveillancerenforc�e;
    }

    public function setSurveillancerenforc�e(?bool $surveillancerenforc�e): self
    {
        $this->surveillancerenforc�e = $surveillancerenforc�e;

        return $this;
    }


}
