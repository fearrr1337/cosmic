<?php

abstract class FlyShip {
    abstract public function createSpaceShip(string $typeShip): SpaceShip;

    public function orderShip(string $shipType): SpaceShip {
        $ship = $this->createSpaceShip($shipType);
        echo "\nКорабль типа " . $shipType . "создан";
        $ship->displayStatus();
        return $ship;
    }
}