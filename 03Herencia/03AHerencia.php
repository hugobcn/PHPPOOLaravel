<?php

function show($message)
{
    echo "<p>$message</p>";
}

  abstract class Unit{
    //protected $alive = true;
    protected $name;
    protected $hp = 40;

    public function __construct($name) {
        
        $this->name = $name;
    }
    
    public function getName(){
        
        return $this->name;
    }

    
    public function getHp(){
        
        
        return $this->hp;
    }
    
    public function setHp($points){
        
        $this->hp = $points;
        
        show("{$this->name} tiene puntosVida: {$this->hp}");
    }

    public function move($direction){
        
        show("{$this->name} avanza hacia $direction");
    }
    
    //metodo abstracto (definirlo y no crarlo)
    abstract function attack(Unit $opponent);
    
    public function dead(){
        
        show("{$this->name} muerto");
         
    }
            
}


class Soldier extends Unit{
    
    public function attack(Unit $opponent){
        
        echo"<p>{$this->name} rajar a {$opponent->getName()} estomago</p>"; //{$opponent->getName()} estomago</p>";
        
        show("buenos:  {$this->getHP()} --- malos: {$opponent->getHp()}");
       //$opponent-> setHp($oppenent->getHp() );  //- $this->damage
       /*
       if($oppenent->getHp() <=0){
            $opponent->dead();
       }*/
    }
    
    
}

class Archer extends Unit{
    
    protected $damage  = 20;
    
    public function attack(Unit $opponent){
        
        echo"<p>{$this->name} rajar a {$opponent->getName()} estomago</p>"; //{$opponent->getName()} estomago</p>";
        
        /*
       $opponent-> setHp($oppenent->getHp()->$this->damage);
       
       if($oppenent->getHp() <=0){
            $opponent->dead();
       }
        */
    }
    
    
}

$unos = new Soldier('unos');
$romanos = new Soldier('romanos');


$unos->attack($romanos);


//$unos->dead();

