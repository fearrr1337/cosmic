<?php

$base_dir = __DIR__;
$SpaceShipDir = $base_dir . "\..\Base/SpaceShip.php";
var_dump($SpaceShipDir);
if(file_exists($SpaceShipDir)) {
    echo "Файл существует";
}

class TurkishFighter implements SpaceShip {
    public function fly(): void
    {
        echo "\nTF-X достиг высоты 60000 км над землёй\n";
    }

    public function shoot(): void
    {
        echo "\nСамонаводящаяся управляемая ракета успешно сбила противника\n";
    }

    public function displayStatus(): void
    {
        echo "\nПерспективный турецкий боевой самолёт пятого поколения\n";
    }
}