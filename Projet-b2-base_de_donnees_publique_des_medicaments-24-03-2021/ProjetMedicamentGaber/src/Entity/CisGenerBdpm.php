<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisGenerBdpm
 *
 * @ORM\Entity(repositoryClass="App\Repository\CisGenerBdpmRepository")
 * @ORM\Table(name="cis_gener_bdpm", indexes={@ORM\Index(name="IDX_17B7BFFB1FDF25AE", columns={"codeCIS"})})
 */
class CisGenerBdpm
{
    /**
     * @var int
     *
     * @ORM\Column(name="idGroupeGenerique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idgroupegenerique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LibelleGroupeGenerique", type="string", length=500, nullable=true)
     */
    private $libellegroupegenerique;

    /**
     * @var int
     *
     * @ORM\Column(name="typeGenerique", type="integer", nullable=false)
     */
    private $typegenerique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numTri", type="integer", nullable=true)
     */
    private $numtri;

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

    public function getIdgroupegenerique(): ?int
    {
        return $this->idgroupegenerique;
    }

    public function getLibellegroupegenerique(): ?string
    {
        return $this->libellegroupegenerique;
    }

    public function setLibellegroupegenerique(?string $libellegroupegenerique): self
    {
        $this->libellegroupegenerique = $libellegroupegenerique;

        return $this;
    }

    public function getTypegenerique(): ?int
    {
        return $this->typegenerique;
    }

    public function setTypegenerique(int $typegenerique): self
    {
        $this->typegenerique = $typegenerique;

        return $this;
    }

    public function getNumtri(): ?int
    {
        return $this->numtri;
    }

    public function setNumtri(?int $numtri): self
    {
        $this->numtri = $numtri;

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
