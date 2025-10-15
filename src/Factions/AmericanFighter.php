<?php


$base_dir = __DIR__;
$SpaceShipDir = $base_dir . "\..\Base/SpaceShip.php";
var_dump($SpaceShipDir);
if(file_exists($SpaceShipDir)) {
    echo "Файл существует";
}


class AmericanFighter implements SpaceShip {
    public function fly(): void
    {
        echo "\nF-35 Lightning II поднялся на высоту 120000 км над земной поверхностью\n";
    }

    public function shoot(): void
    {
        echo "\nРакетный комплекс Patriot сбил баллистическую ракету\n";
    }

    public function displayStatus(): void
    {
        echo "\nАмериканский всепогодный малозаметный истребитель-бомбардировщик пятого поколения\n";
    }
}