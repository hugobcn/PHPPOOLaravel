<?php

trait CanPerformBasicActions
{
    public function move()
    {
        echo "<p>Caminó</p>";
    }
}

trait CanShootArrows
{
    //public $arrows = 50;
    
    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
    }

    abstract public function getArrows();
    
    /*
     * public function getArrows(){
     *   return isset($this->arrows) ?  $this->arrows =22;
     * return $this->arrows ??  $this->arrows  : 50;
     * }
     * 
     */
}

trait CanRide 
{
    public function move()
    {
        echo "<p>Cabalgó</p>";
    }
}

class Knight
{
    use CanRide;
}

class Archer
{
    // no se puede sobreescribir un propiedad que este en un trait llamdo
    //public $arrows = 20;
    
    use CanShootArrows;

    public function getArrows()
    {
        return 30;
    }
}

class MountedArcher
{
    use CanRide;

    use CanShootArrows;

    public function getArrows()
    {
        return 100;
    }
}

//funciona priorizar move de Canride sobre  CanPerfom
//le damos un alias
class Prueba {
    
    use CanPerformBasicActions, CanRide{
        
        CanRide::move insteadof CanPerformBasicActions;
        CanRide::move as ride;
        CanPerformBasicActions::move as basicMove;
    }
            
} 


$mountedArcher = new MountedArcher;

$mountedArcher->shootArrow();

echo "<p>{$mountedArcher->getArrows()}</p>";

$prueba = new Prueba;

//coge de  CanRide
$prueba->move();
//apodos
$prueba->ride();
$prueba->basicMove();