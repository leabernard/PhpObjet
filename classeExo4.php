
<?php
class Personnage3{

private $_Speudo;
private $_vie;
private $_attaque;


public function __construct($newVie,$pseudo){
$this-> _Speudo=$pseudo;
$this -> _vie = $newVie;



    
}
public function stat(){
    echo"je m'appelle '$this->_Speudo' et j'ai '$this->_vie'";
}
public function attaque($perso1){
$this -> defence=$perso1;


    
}
public function defence($_attaque){

}

 }




?>