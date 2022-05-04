<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [

      'fuel',

      'electric',

  ];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);

        // $this->energy = $energy;
        $this->setEnergy($energy);
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Starting the car is not possible while park brake is active' . PHP_EOL);
        } else {
            return 'C\'est fantastique, nous allons démarrer' . PHP_EOL;
        }
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
