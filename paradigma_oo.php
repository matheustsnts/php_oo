<?php

class People {
    public function getHello($name) {
        return "Hello, {$name}.\n";
    }

    public function getIdade(int $idade) {
        if ($idade >= 0 && $idade <= 1) {
            return "{$idade} ano.\n";
        }
        elseif ($idade < 0) {
            return "Idade inexistente.\n";
        }
        else {
            return "{$idade} anos.\n";
        }
    }
}

$p = new People;

echo $p->getHello("Matheus");
echo $p->getIdade(24);