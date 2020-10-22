<?php

require_once "Vehicle.php";

class Truck extends Vehicle
{
    const ALLOWED_ENERGY = [
        'fuel',
        'electric'
    ];
    /**
     * @var int
     * capacité de chargement max (100)
     */
    private $totalCapacity;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     * chargement actuel (0 initial)
     */
    private $fillCapacity;

    public function __construct(string $color, int $nbSeats, int $totalCapacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->totalCapacity = $totalCapacity;
        $this->energy = $this->setEnergy($energy);
    }

    public function isFill(): string
    {
        if ($this->fillCapacity == 100) {
            return "Le camion est plein !";
        } else
            return "Le camion est chargé à " . $this->getFillCapacity() . "% de ses capacités";
    }

    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy($energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGY)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCapacity()
    {
        return $this->totalCapacity;
    }

    /**
     * @param int $totalCapacity
     */
    public function setTotalCapacity($totalCapacity)
    {
        $this->totalCapacity = $totalCapacity;
    }

    /**
     * @return int
     */
    public function getFillCapacity()
    {
        return $this->fillCapacity;
    }

    /**
     * @param int $fillCapacity
     */
    public function setFillCapacity($fillCapacity)
    {
        $this->fillCapacity = $fillCapacity;
    }
}