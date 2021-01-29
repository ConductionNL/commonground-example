<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BRIRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BRIRepository::class)
 */
class BRI
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $BSN;

    /**
     * @ORM\Column(type="date")
     */
    private $Year;

    /**
     * @ORM\Column(type="integer")
     */
    private $YearIncome;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBSN(): ?int
    {
        return $this->BSN;
    }

    public function setBSN(int $BSN): self
    {
        $this->BSN = $BSN;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->Year;
    }

    public function setYear(\DateTimeInterface $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    public function getYearIncome(): ?int
    {
        return $this->YearIncome;
    }

    public function setYearIncome(int $YearIncome): self
    {
        $this->YearIncome = $YearIncome;

        return $this;
    }
}
