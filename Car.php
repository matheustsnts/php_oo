<?php

class Car
{
    public $usuario;
    public $nome;
    public $cav;

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCav()
    {
        return $this->cav;
    }

    public function setCav(int $cav)
    {
        $this->cav = $cav;
    }


}

$pessoa = new Car();

$pessoa->setUsuario("Matheus");
$pessoa->setNome("Corsa");
$pessoa->setCav(462);

echo "Olá {$pessoa->getUsuario()}, seu carro é o {$pessoa->getNome()} e ele tem {$pessoa->getCav()} cavalos";