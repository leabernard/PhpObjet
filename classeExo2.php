<?php
 class Personnage{

private $_Speudo;
private $_vie;



public function __construct($newVie){

$this -> _vie = $newVie;



    
}
public function stat(){
    echo" j'ai '$this->_vie' de vie";
}


 }




?>