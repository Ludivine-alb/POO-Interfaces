<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    //Methods
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        } else {
            return 'Hé bah non hihi' . PHP_EOL;
        }
    }
}