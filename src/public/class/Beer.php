<?php
error_reporting(-1);

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage ;




    public function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature = 'froid')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getInfo() : string
    {
        $phrase = "Ma boisson s'appel ". $this->getName()  . " et son pourcentage d'alcool est de ". $this->getAlcoholPercentage()."° ";
        $phrase .= parent::getInfo();
        return $phrase;
    }
    public static  function getBarName($name): string
    {
        return parent::getBarName($name); // TODO: Change the autogenerated stub
    }


}