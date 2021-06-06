<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisCompoBdpm
 *
 * @ORM\Entity(repositoryClass="App\Repository\CisCompoBdpmRepository")
 * @ORM\Table(name="cis_compo_bdpm", indexes={@ORM\Index(name="IDX_8F5330D01FDF25AE", columns={"codeCIS"})})
 */
class CisCompoBdpm
{
    /**
     * @var string
     *
     * @ORM\Column(name="designationElementPharmaceutique", type="string", length=500, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $designationelementpharmaceutique;

    /**
     * @var int
     *
     * @ORM\Column(name="codeSubstance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codesubstance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="denominationSubstance", type="string", length=500, nullable=true)
     */
    private $denominationsubstance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dosageSubstance", type="string", length=500, nullable=true)
     */
    private $dosagesubstance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referenceDosage", type="string", length=500, nullable=true)
     */
    private $referencedosage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="natureComposant", type="string", length=500, nullable=true)
     */
    private $naturecomposant;

    /**
     * @var int
     *
     * @ORM\Column(name="Liaison_FT_SA", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $liaisonFtSa;

    /**
     * @var \CisBdpm
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CisBdpm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeCIS", referencedColumnName="codeCIS")
     * })
     */
    private $codecis;

    public function getDesignationelementpharmaceutique(): ?string
    {
        return $this->designationelementpharmaceutique;
    }

    public function getCodesubstance(): ?int
    {
        return $this->codesubstance;
    }

    public function getDenominationsubstance(): ?string
    {
        return $this->denominationsubstance;
    }

    public function setDenominationsubstance(?string $denominationsubstance): self
    {
        $this->denominationsubstance = $denominationsubstance;

        return $this;
    }

    public function getDosagesubstance(): ?string
    {
        return $this->dosagesubstance;
    }

    public function setDosagesubstance(?string $dosagesubstance): self
    {
        $this->dosagesubstance = $dosagesubstance;

        return $this;
    }

    public function getReferencedosage(): ?string
    {
        return $this->referencedosage;
    }

    public function setReferencedosage(?string $referencedosage): self
    {
        $this->referencedosage = $referencedosage;

        return $this;
    }

    public function getNaturecomposant(): ?string
    {
        return $this->naturecomposant;
    }

    public function setNaturecomposant(?string $naturecomposant): self
    {
        $this->naturecomposant = $naturecomposant;

        return $this;
    }

    public function getLiaisonFtSa(): ?int
    {
        return $this->liaisonFtSa;
    }

    public function getCodecis(): ?CisBdpm
    {
        return $this->codecis;
    }

    public function setCodecis(?CisBdpm $codecis): self
    {
        $this->codecis = $codecis;

        return $this;
    }


}
