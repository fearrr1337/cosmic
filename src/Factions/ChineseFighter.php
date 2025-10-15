<?php


$base_dir = __DIR__;
$SpaceShipDir = $base_dir . "\..\Base/SpaceShip.php";
var_dump($SpaceShipDir);
if(file_exists($SpaceShipDir)) {
    echo "Файл существует";
}

class ChineseFighter implements SpaceShip {
    public function fly(): void
    {
        echo "\nJ-20 поднялся на высоту 90000 км над поверхностью Земли\n";
    }

    public function shoot(): void
    {
        echo "\nГиперзвуковая ракета уничтожила вражеский объект\n";
    }

    public function displayStatus(): void
    {
        echo "\nКитайский стелс-истребитель пятого поколения\n";
    }
}