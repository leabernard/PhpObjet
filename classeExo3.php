
<?php
class Personnage2{

private $_Speudo;
private $_vie;



public function __construct($newVie,$pseudo){
$this-> _Speudo=$pseudo;
$this -> _vie = $newVie;



    
}
public function stat(){
    echo"je m'appelle '$this->_Speudo' et j'ai '$this->_vie'";
}


 }




?>