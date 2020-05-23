<?php

protected const MAX_DAMAGE = 100;

protected function setHp($damage)
    {
        if ($damage > static::MAX_DAMAGE) {
            $damage = static::MAX_DAMAGE;
        }

        $this->hp = $this->hp - $damage;
    }

    
    require '../vendor/autoload.php';
    
     $daño= Unit::MAX_DAMAGE;
