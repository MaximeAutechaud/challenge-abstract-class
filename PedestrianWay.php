<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bike)
            $this->currentVehicles[] = $vehicle;
        else
            return;

        // TODO: Implement addVehicle() method.
    }

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(1, 10);
    }

}