<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        

    $arrayDemo= array();        
    foreach ($rows as $c){
	//aqui tienen que ir los campos iguales al que tengo en mi base de 	datos
      $aux = new Demo($c{'id_demo'},$c{'nombre'},$c{'tipo'},$c {'fechaNacimiento'},$c {'img'} 	 );
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM demo where id_demo= ?", array("{$id}"));        
    $ObjDemo = new Demo($row[0]{'id_demo'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0] {'fechaNacimiento'},$row[0] {'img'});
    return $ObjDemo;        
  }

function updateDemo($id, $nombre, $tipo, $img) {

    $insertRow = self::$db->updateRow        
    ("Update public.demo SET nombre = ('$nombre'), tipo = ('$tipo'), img = ('$img') WHERE id_demo = ($id)");
    
  }

function insertDemo($nombre) {
    $insertRow = self::$db->insertRow ("Insert INTO public.demo (nombre) VALUES (?)", array("{$nombre}"));
    
  }

function deleteDemo($id) {
    $deleteRow = self::$db->deleteRow        
    ("DELETE FROM public.demo WHERE id_demo = ?", array($id));
    
  }

}
?>

