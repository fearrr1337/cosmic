<?php

use cosmic\src\Base;

$base = __DIR__ . "/";
$spaceShip = $base . "/Base/SpaceShip.php";
var_dump($spaceShip);

if (file_exists($spaceShip)) {
    require_once $spaceShip;
    echo "Файл подключен и готов к использованию";
}
