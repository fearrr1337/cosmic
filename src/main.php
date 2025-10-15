<?php


$base_dir = __DIR__ . "/";
$singletone = $base_dir . "Patterns/GalacticRegistry.php";
var_dump($singletone);
if (file_exists($singletone)) {
//    echo "Файл существует!";
    require_once $singletone;
}

$registry = GalacticRegistry::getInstance();
$anotherRegistry = GalacticRegistry::getInstance();
if ($registry === $anotherRegistry) {
    echo "\nОбъекты идентичны";
} else {
    echo "\nНеверно был спроектирован Singleton";
}