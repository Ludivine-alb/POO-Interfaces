<?php

require_once 'Vehicle.php';

class heavyTruck extends Vehicle
{
    
    private int $storageCapacity;
    private int $initialStorage = 0;

   
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);

        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

  
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getInitialStorage(): int
    {
        return $this->initialStorage;
    }

    public function setInitialStorage(int $initialStorage): void
    {
        $this->initialStorage = $initialStorage;
    }


    private int $totalStored = 0;

    public function fill(): int
    {
        while ($this->initialStorage < $this->storageCapacity) {
            $this->initialStorage += 5;
        }
        $this->totalStored = $this->initialStorage;
        return $this->totalStored;
    }

    public function isFilled(): string
    {
        if ($this->totalStored >= $this->storageCapacity) {
          return 'Truck is full';
        }
        else {
          return 'Truck is in filling';
        }
    }
}

?>