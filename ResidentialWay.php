<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    //Methods
    public function addVehicle(Vehicle $vehicle)
    {
            $this->setCurrentVehicles($vehicle);
    }
}
