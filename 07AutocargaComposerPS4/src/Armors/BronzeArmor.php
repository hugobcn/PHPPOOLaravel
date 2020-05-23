<?php

namespace GOT\Armors;

use GOT\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}