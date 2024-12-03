<?php

namespace App\Entity;

use App\Repository\HabitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: HabitRepository::class)]
class Habit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $frequency = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(
        pattern: '/#[0-9A-Fa-f]{6}/',
        message: 'The habit color must be written in hexadecimal format',
    )]
    private ?string $color = null;

    #[ORM\Column(length: 1)]
    private ?string $scoreChartPeriod = null;

    #[ORM\Column(length: 1)]
    private ?string $historyChartPeriod = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $creationDate = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $user = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    public function setFrequency(string $frequency): static
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getScoreChartPeriod(): ?string
    {
        return $this->scoreChartPeriod;
    }

    public function setScoreChartPeriod(string $scoreChartPeriod): static
    {
        $this->scoreChartPeriod = $scoreChartPeriod;

        return $this;
    }

    public function getHistoryChartPeriod(): ?string
    {
        return $this->historyChartPeriod;
    }

    public function setHistoryChartPeriod(string $historyChartPeriod): static
    {
        $this->historyChartPeriod = $historyChartPeriod;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): static
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
