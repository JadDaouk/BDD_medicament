<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisHas
 *
 * @ORM\Entity(repositoryClass="App\Repository\CisHasRepository")
 * @ORM\Table(name="cis_has", indexes={@ORM\Index(name="codeCIS", columns={"codeCIS"}), @ORM\Index(name="IDX_D6FBB287FE75102B", columns={"CodeDossierHAS"})})
 */
class CisHas
{
    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $valeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motifEvaluation", type="string", length=500, nullable=true)
     */
    private $motifevaluation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateAvisCimmissionTransparence", type="date", nullable=true)
     */
    private $dateaviscimmissiontransparence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=5000, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ASMR_SMR", type="string", length=5, nullable=true)
     */
    private $asmrSmr;

    /**
     * @var \HasLienspagectBdpm
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="HasLienspagectBdpm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeDossierHAS", referencedColumnName="CodeDossierHAS")
     * })
     */
    private $codedossierhas;

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

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function getMotifevaluation(): ?string
    {
        return $this->motifevaluation;
    }

    public function setMotifevaluation(?string $motifevaluation): self
    {
        $this->motifevaluation = $motifevaluation;

        return $this;
    }

    public function getDateaviscimmissiontransparence(): ?\DateTimeInterface
    {
        return $this->dateaviscimmissiontransparence;
    }

    public function setDateaviscimmissiontransparence(?\DateTimeInterface $dateaviscimmissiontransparence): self
    {
        $this->dateaviscimmissiontransparence = $dateaviscimmissiontransparence;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getAsmrSmr(): ?string
    {
        return $this->asmrSmr;
    }

    public function setAsmrSmr(?string $asmrSmr): self
    {
        $this->asmrSmr = $asmrSmr;

        return $this;
    }

    public function getCodedossierhas(): ?HasLienspagectBdpm
    {
        return $this->codedossierhas;
    }

    public function setCodedossierhas(?HasLienspagectBdpm $codedossierhas): self
    {
        $this->codedossierhas = $codedossierhas;

        return $this;
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
