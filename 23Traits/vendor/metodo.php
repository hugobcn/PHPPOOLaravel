<?php

class unaClase{
    
    public function  __call($metodo,array $args){
        dd($metodo,$args);
    }
       
    public static  function __callStatic($metodo,array $args){
        dd($metodo,$args);
    }
}

$objeto = new unaClase();

$objeto ->unMetodo('argumento','agumento');

unaClase::metodoStatico('todos','los','argumentos');