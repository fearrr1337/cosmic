<?php

$base_dir = __DIR__;
$SpaceShipDir = $base_dir . "\..\Base/SpaceShip.php";
var_dump($SpaceShipDir);
if(file_exists($SpaceShipDir)) {
    echo "Файл существует";
}

require_once $SpaceShipDir;

class RussianFighter implements SpaceShip {

    public function fly(): void
    {
        echo "\nТу-141 находится на высоте 100000км от земли\n";
    }

    public function shoot(): void
    {
        echo "\nЯдерная ракета уничтожила врага\n";
    }

    public function displayStatus(): void
    {
        echo "\nМногоразовый советский оперативно-тактический разведывательный беспилотный летательный аппарат";
    }

}
