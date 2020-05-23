<?php

require '../vendor/autoload.php';

use Styde\User;
use Styde\Food;
use Styde\LunchBox;
///Europe/Amsterdam
class Time{
    
    protected $time = null;
    protected $timezone ;
    
    public function __construct($time= null, $timezone = 'Europe/London') {
        $this->time = $time ?: time();
        $this->timezone =$timezone;
    }
    
    public function __toString() {
        
        return date('d/m/y H:i:s',$this->time);
    }
    
   }
   
   $today = new Time(null,'Europe/Amsterdam');
   $today = new Time(null,'Europe/London');
   
   
   //if($today == $today2) tipoç
   //if($today === $today2) valor
   if($today === $today2){ 
       echo 'Verdad';
   } else {
       echo 'falso';
}