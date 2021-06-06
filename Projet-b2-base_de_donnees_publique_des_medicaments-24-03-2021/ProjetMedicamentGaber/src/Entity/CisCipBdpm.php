<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisCipBdpm
 *
 * @ORM\Entity(repositoryClass="App\Repository\CisCipBdpmRepository")
 * @ORM\Table(name="cis_cip_bdpm", indexes={@ORM\Index(name="FK_CIS_CIP_bdpm", columns={"codeCIS"})})
 */
class CisCipBdpm
{
    /**
     * @var int
     *
     * @ORM\Column(name="codeCIP7", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codecip7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellePresentation", type="string", length=500, nullable=true)
     */
    private $libellepresentation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statutAdministratifPresentation", type="string", length=500, nullable=true)
     */
    private $statutadministratifpresentation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etatCommercialisationPresentationTelDeclareParTitulaireDeAMM", type="string", length=500, nullable=true)
     */
    private $etatcommercialisationpresentationteldeclarepartitulairedeamm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDeclarationCommercialisation", type="date", nullable=true)
     */
    private $datedeclarationcommercialisation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codeCIP13", type="bigint", nullable=true)
     */
    private $codecip13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agrementAuxCollectivites", type="string", length=50, nullable=true)
     */
    private $agrementauxcollectivites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tauxRemboursement", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tauxremboursement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prixMedicament", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $prixmedicament;

    /**
     * @var string|null
     *
     * @ORM\Column(name="indicationsOuvrantDroitRemboursement", type="string", length=2000, nullable=true)
     */
    private $indicationsouvrantdroitremboursement;

    /**
     * @var \CisBdpm
     *
     * @ORM\ManyToOne(targetEntity="CisBdpm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codeCIS", referencedColumnName="codeCIS")
     * })
     */
    private $codecis;

    public function getCodecip7(): ?int
    {
        return $this->codecip7;
    }

    public function getLibellepresentation(): ?string
    {
        return $this->libellepresentation;
    }

    public function setLibellepresentation(?string $libellepresentation): self
    {
        $this->libellepresentation = $libellepresentation;

        return $this;
    }

    public function getStatutadministratifpresentation(): ?string
    {
        return $this->statutadministratifpresentation;
    }

    public function setStatutadministratifpresentation(?string $statutadministratifpresentation): self
    {
        $this->statutadministratifpresentation = $statutadministratifpresentation;

        return $this;
    }

    public function getEtatcommercialisationpresentationteldeclarepartitulairedeamm(): ?string
    {
        return $this->etatcommercialisationpresentationteldeclarepartitulairedeamm;
    }

    public function setEtatcommercialisationpresentationteldeclarepartitulairedeamm(?string $etatcommercialisationpresentationteldeclarepartitulairedeamm): self
    {
        $this->etatcommercialisationpresentationteldeclarepartitulairedeamm = $etatcommercialisationpresentationteldeclarepartitulairedeamm;

        return $this;
    }

    public function getDatedeclarationcommercialisation(): ?\DateTimeInterface
    {
        return $this->datedeclarationcommercialisation;
    }

    public function setDatedeclarationcommercialisation(?\DateTimeInterface $datedeclarationcommercialisation): self
    {
        $this->datedeclarationcommercialisation = $datedeclarationcommercialisation;

        return $this;
    }

    public function getCodecip13(): ?string
    {
        return $this->codecip13;
    }

    public function setCodecip13(?string $codecip13): self
    {
        $this->codecip13 = $codecip13;

        return $this;
    }

    public function getAgrementauxcollectivites(): ?string
    {
        return $this->agrementauxcollectivites;
    }

    public function setAgrementauxcollectivites(?string $agrementauxcollectivites): self
    {
        $this->agrementauxcollectivites = $agrementauxcollectivites;

        return $this;
    }

    public function getTauxremboursement(): ?string
    {
        return $this->tauxremboursement;
    }

    public function setTauxremboursement(?string $tauxremboursement): self
    {
        $this->tauxremboursement = $tauxremboursement;

        return $this;
    }

    public function getPrixmedicament(): ?string
    {
        return $this->prixmedicament;
    }

    public function setPrixmedicament(?string $prixmedicament): self
    {
        $this->prixmedicament = $prixmedicament;

        return $this;
    }

    public function getIndicationsouvrantdroitremboursement(): ?string
    {
        return $this->indicationsouvrantdroitremboursement;
    }

    public function setIndicationsouvrantdroitremboursement(?string $indicationsouvrantdroitremboursement): self
    {
        $this->indicationsouvrantdroitremboursement = $indicationsouvrantdroitremboursement;

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
