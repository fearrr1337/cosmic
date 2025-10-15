<?php

interface SpaceShip {
    public function fly(): void;

    public function shoot(): void;

    public function displayStatus(): void;
}