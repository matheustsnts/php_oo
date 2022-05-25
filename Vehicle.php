<?php 

require_once("IVehicle.php");

// Classe mestra veiculos
abstract class Vehicle implements IVehicle
{
    public $brand;
    protected $color;
    public $engine;

    //Método construtor desta classe
    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    //Exibir apenas a função de Cavalos do Veículo
    public function getEngine($type = "horsepower")
    {
        return "{$this->engine} {$type}";
    }

    abstract public function getBrand();
    
    public function getColor()
    {
        return $this->color;
    }
    
}