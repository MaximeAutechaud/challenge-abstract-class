<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;

        // TODO: Implement addVehicle() method.
    }

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(2, 50);
    }

}