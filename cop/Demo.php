<?php

class Demo
{
    private $idDemo;
    private $nombre;
    private $tipo;
    private $fecha;
    private $img;
    
     function __construct($idDemo, $nombre, $tipo, $fecha, $img) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fecha = $fecha;
       $this->img = $img;
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     }
     function setImg($img){
       $this->fecha = $img;
     } 
     function getImg(){
       return $this->img;
     }
}

?> 
