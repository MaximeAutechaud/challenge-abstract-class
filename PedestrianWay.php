<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bike)
            $this->currentVehicle = $vehicle;
        else
            return;

        // TODO: Implement addVehicle() method.
    }

    public function setNbLane($nbLane)
    {
        parent::setNbLane($nbLane); // TODO: Change the autogenerated stub
        $this->setNbLane(1);
    }

    public function setMaxSpeed($maxSpeed)
    {
        parent::setMaxSpeed($maxSpeed); // TODO: Change the autogenerated stub
        $this->setMaxSpeed(10);
    }

}