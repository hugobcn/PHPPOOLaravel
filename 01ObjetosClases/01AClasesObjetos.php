<?php

class Person{
    
    var $firstName;
    var $lastName;
    
    function __construct($firstName,$lastName) {
        
        $this->firstName =$firstName;
        $this->lastName=$lastName;
    }
    
    function fullNamePersona(){
    
    return $this->firstName.' '.$this->lastName;
}

}

$person1 = new Person('hugo','bermudez');
$person2 = new Person('paco','pil');



//exit($person1->fullNamePersona());

//exit($person2->fullNamePersona());
echo "{$person1->fullNamePersona()} es amigo de {$person2->fullNamePersona()} ";
