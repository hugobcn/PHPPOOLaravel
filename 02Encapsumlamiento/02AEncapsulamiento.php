<?php

class Person{
    
    private $firstName;
    private $lastName;
    
    function __construct($firstName,$lastName) {
        
        $this->firstName =$firstName;
        $this->lastName=$lastName;
    }
    
    public function getFirstName() {
        return $this->firstName;
    }
    
    
    public function getLastName() {
        return $this->lastName;
    }
    
    public function setFirstName($firstName) {
        if(isset($firstName)){
        $this->firstName =$firstName;
        }else{
            throw new Exception("esta vacio");
        }
    }
    
    public function setLastName($lastName) {
        $this->lastName=$lastName;
    }
    
    function getfullNamePersona(){
   
    return $this->firstName.' '.$this->lastName;
}

}

$person1 = new Person('hugo','bermudez');
$person2 = new Person('paco','pil');



//exit($person1->fullNamePersona());

//exit($person2->fullNamePersona());
echo "{$person1->getfullNamePersona()} es amigo de {$person2->getfullNamePersona()} <br>";

$person1->setFirstName('bibi');
$person1->setLastName('andersen');

echo "{$person1->getfullNamePersona()} es amigo de {$person2->getfullNamePersona()} ";

 