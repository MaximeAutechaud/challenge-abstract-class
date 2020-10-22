<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;

        // TODO: Implement addVehicle() method.
    }

}
