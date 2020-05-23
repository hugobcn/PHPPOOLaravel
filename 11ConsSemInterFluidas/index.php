<?php

namespace Styde;

require '../vendor/autoload.php';



$ramm = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword())
            ->setArmor(new Armors\SilverArmor())
            ->setShield();



