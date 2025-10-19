<?php

namespace cosmic\src\Base;

interface Weapon {
    
    public function getDamage(): int;

    public function getType(): string;

}
