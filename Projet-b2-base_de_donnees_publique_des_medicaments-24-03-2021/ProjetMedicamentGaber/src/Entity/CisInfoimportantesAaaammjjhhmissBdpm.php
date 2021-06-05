<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisInfoimportantesAaaammjjhhmissBdpm
 *
 * @ORM\Entity(repositoryClass="App\Repository\ClassNameRepository")
 * @ORM\Table(name="cis_infoimportantes_aaaammjjhhmiss_bdpm", indexes={@ORM\Index(name="IDX_7E486D361FDF25AE", columns={"codeCIS"})})
 * @ORM\Entity
 */
class CisInfoimportantesAaaammjjhhmissBdpm
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutInformationSecurité", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datedebutinformationsecurit�;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinInformationSecurité", type="date", nullable=true)
     */
    private $datefininformationsecurit�;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=500, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="href", type="string", length=500, nullable=true)
     */
    private $href;

    /**
     * @var string
     *
     * @ORM\Column(name="infoMessage", type="string", length=500, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $infomessage;

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

    public function getDatedebutinformationsecurit�(): ?\DateTimeInterface
    {
        return $this->datedebutinformationsecurit�;
    }

    public function getDatefininformationsecurit�(): ?\DateTimeInterface
    {
        return $this->datefininformationsecurit�;
    }

    public function setDatefininformationsecurit�(?\DateTimeInterface $datefininformationsecurit�): self
    {
        $this->datefininformationsecurit� = $datefininformationsecurit�;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHref(?string $href): self
    {
        $this->href = $href;

        return $this;
    }

    public function getInfomessage(): ?string
    {
        return $this->infomessage;
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
