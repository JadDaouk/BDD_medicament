<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CisCpdBdpm
 *
 * @ORM\Entity(repositoryClass="App\Repository\CisCpdBdpmRepository")
 * @ORM\Table(name="cis_cpd_bdpm", indexes={@ORM\Index(name="IDX_E6F23A541FDF25AE", columns={"codeCIS"})})
 */
class CisCpdBdpm
{
    /**
     * @var string
     *
     * @ORM\Column(name="conditionPrescription_Delivrance_", type="string", length=500, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditionprescriptionDelivrance;

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

    public function getConditionprescriptionDelivrance(): ?string
    {
        return $this->conditionprescriptionDelivrance;
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
