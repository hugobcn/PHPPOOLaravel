<?php

class person{
    
    public $id;
    
    public $name;
    
    public $online = false;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function is($otherPerson) {
        return  $this->id == $otherPerson->id;
    }
}

$hugo = new Person('Hugo');
$hugo->id = 1;
$hugo ->online = true;

$hugo2 = new Person('Hugo');
$hugo2->id = 1;

$p = $hugo == $hugo2 ?  'Verdad' :  'falso'; //verdad
$p2 = $hugo == $hugo2 ?  'Verdad' :  'falso'; //falso  $hugo ->online = true;
$p3 = $hugo->id == $hugo2->id ?  'Verdad' :  'falso'; //verdadero
$p4 = $hugo->id == is($hugo2->id) ?  'Verdad' :  'falso'; //verdadero