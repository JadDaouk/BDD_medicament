<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HasLienspagectBdpm
 *
 * @ORM\Entity(repositoryClass="App\Repository\ClassNameRepository")
 * @ORM\Table(name="has_lienspagect_bdpm")
 * @ORM\Entity
 */
class HasLienspagectBdpm
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeDossierHAS", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codedossierhas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LienVersPagesAvisCT_", type="string", length=500, nullable=true)
     */
    private $lienverspagesavisct;

    public function getCodedossierhas(): ?string
    {
        return $this->codedossierhas;
    }

    public function getLienverspagesavisct(): ?string
    {
        return $this->lienverspagesavisct;
    }

    public function setLienverspagesavisct(?string $lienverspagesavisct): self
    {
        $this->lienverspagesavisct = $lienverspagesavisct;

        return $this;
    }


}
