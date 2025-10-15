<?php


$base_dir = __DIR__;
$SpaceShipDir = $base_dir . "\..\Base/SpaceShip.php";
var_dump($SpaceShipDir);
if(file_exists($SpaceShipDir)) {
    echo "Файл существует";
}


class JapaneseFighter implements SpaceShip {
    public function fly(): void
    {
        echo "\nF-2 поднялся на высоту 70000 км над Землей\n";
    }

    public function shoot(): void
    {
        echo "\nПротиворакетная система перехватила вражеские ракеты\n";
    }

    public function displayStatus(): void
    {
        echo "\nМодифицированный японский вариант американского F-16 Fighting Falcon\n";
    }
}