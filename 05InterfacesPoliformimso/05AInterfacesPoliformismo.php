<?php

function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit {
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack( $opponent);

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->dead();
        }
    }

    public function dead()
    {
        show("{$this->name} muere");

        exit();
    }

    protected function absorbDamage($damage)
    {
        return $damage;
    }
}

class Soldeadr extends Unit
{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function attack( $opponent)
    {
        show(
            "{$this->name} ataca con la espada a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack( $opponent)
    {
        show(
            "{$this->name} dispara una flecha a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }
}

interface Armor
{
    public function absorbDamage($damage);
}

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}

$armor = new BronzeArmor();

$ramm = new Soldeadr('Ramm');

$silence = new Archer('Silence');
//$silence->move('el norte');
$silence->attack($ramm);

$ramm->setArmor(new CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);


/*

public function setArmor(Armor $armor = null)  //Armor $armor = null  no es necesrio ningun valor


----inferface-----

class BronzeArmor implements Armor
{
public function absorbDamage($damage);
}
{
public function absorbDamage($damage)
{
return $damage / 2;
}
}
 
class SilverArmor implements Armor
{
public function absorbDamage($damage)
{
return $damage / 3;
}


$ramm = new Soldier('Ramm');
$ramm->setArmor(new CursedArmor);

class Soldier extends Unit{
protected $armor;
public function setArmor(Armor $armor = null)
{
$this->armor = $armor;
}
}


*/


