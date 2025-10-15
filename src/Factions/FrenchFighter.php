<?php

$base_dir = __DIR__;
$SpaceShipDir = $base_dir . "\..\Base/SpaceShip.php";
var_dump($SpaceShipDir);
if(file_exists($SpaceShipDir)) {
    echo "Файл существует";
}

class FrenchFighter implements SpaceShip {
    public function fly(): void
    {
        echo "\nМираж 2000 поднялся на высоту 80000 км над землей\n";
    }

    public function shoot(): void
    {
        echo "\nРакета средней дальности поразила цель\n";
    }

    public function displayStatus(): void
    {
        echo "\nФранцузский многоцелевой истребитель четвёртого поколения\n";
    }
}