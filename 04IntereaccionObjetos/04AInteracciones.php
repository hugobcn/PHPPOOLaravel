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
    //public function attack(Unit $opponent); sin abstracta declarar tipo de variables
    abstract public function attack($opponent);

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);

        if ($this->hp <= 0) {
            $this->dead();
        }
    }

    public function dead()
    {
        show("{$this->name} muere");
    }

    private function setHp($points)
    {
        $this->hp = $points;

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }
}

class Soldeadr extends Unit
{
    protected $damage = 40;

    public function attack($opponent)
    {
        show(
            "{$this->name} corta a {$opponent->getName()} en dos"
        );

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack($opponent)
    {
        show(
            "{$this->name} dispara una flecha a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        if (rand(0, 1)) {
            return parent::takeDamage($damage);
        }
    }
}

$ramm = new Soldeadr('Ramm');

$silence = new Archer('Silence');
//$silence->move('el norte');
$silence->attack($ramm);

$silence->attack($ramm);

$ramm->attack($silence);


/*

parent::  (echo parent::CONSTANTE;)  Cuando queramos acceder a una constante o método de una clase padre,
self:: (echo self::$variable)                                                           acceder a una constante o método estático desde dentro de la clase, usamos la palabra reservada: self.

Uno usa $this para hacer referencia al objeto (instancia) actual, y se utiliza self:: para referenciar a la clase actual. Se utiliza $this->nombre para nombres no estáticos y se utiliza self::nombres para nombres estáticos.

---instanace of -----

    $shape = new Shape();
    var_dump($shape instanceof Shape); // true


    class WishDB extends mysqli {
     
    private static $instance = null;
     
    public static function getInstance() {
       if (!self::$instance instanceof self) { // <<<<<<< what is this?
         self::$instance = new self; //// <<<<<<< and what is here self?
       }
       return self::$instance;
    }


is_a( $object, $class_name, $allow_string )

$geek = new GeeksforGeeks(); 

if (is_a($geek, 'GeeksforGeeks'))    ==    if ($geek instanceof GeeksforGeeks)


get_class($this) obtenrr clase



---rand---

rand(0, 1)



$random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int

$random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)); // random(ish) 5 character string


*/