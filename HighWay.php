<?php

abstract class HighWay
{
    /**
     * @var array
     * nbre de vehicules
     */
    protected $currentVehicle;
    /**
     * @var int
     * nbre de voies
     */
    protected $nbLane;
    /**
     * @var int
     * Vitesse max autorisée
     */
    protected $maxSpeed;

    protected function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);

    /**
     * @return array
     */
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     */
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }



}