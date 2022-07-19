<?php
error_reporting(E_ALL);

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    private static $adress = "Melkmarkt 9, 2000 Antwerpen";


    public function __construct(string $color, float $price, string $temperature = 'froid')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getInfo(): string
    {
        return "Cette boisson est ". $this->getTemperature() . " et ". $this->getColor();
    }

    public static function getBarName($name): string{
        return $name;
    }

    /**
     * @return string
     */
    public static function getAdress(): string
    {
        return self::$adress;
    }
}