<?php

interface Weapon {
    public function getDamage(): int;
    public function getType(): string;
}