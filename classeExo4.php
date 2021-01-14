
<?php
class Personnage3{
//propriété speudo et vie
private $_Speudo;
private $_vie;



public function __construct($newVie,$speudo){
$this->_Speudo = $speudo;
$this->_vie = $newVie;

   
}
public function stat(){
    echo"je m'appelle ".$this->_Speudo." et j'ai ".$this->_vie." points de vie";
}
//méthode attaque 
public function massacrer($cible){
    echo ("<p>".$this->_Speudo." massacre <b>".$cible->_Speudo);
            $this->defense($cible, 50);
}

//méthode deffence
public function defense($cible, $dégâts){
    $cible->_vie -= $dégâts;
    echo ("<p>".$cible->_Speudo." a perdu <b>".$dégâts."</b> organes</p>");
}
 }




?>