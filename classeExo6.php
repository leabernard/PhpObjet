<?php
class Personnage5{
//propriéter id , speudo et vie
    private $_id;
    private $_speudo;
    private $_vie;

    public function __construct($bdd, $id){
        $this->bdd2 = new PDO("mysql:dbname=lea_objet_exo5;host=localhost", "root", "root");
        $query = $bdd->query("SELECT * FROM perso WHERE id = $id")->fetch(); // requete select msql
        $this->_speudo = $query["speudo"]; 
        $this->_vie = $query["vie"];
        $this->_id = $id;

    }
    public function stat(){ //methode stat affiche la vie du speudo
        echo"Je m'appelle ".$this->_speudo." et j'ai ".$this->_vie." points de vie<p>";
    }
    //méthode attaque 
    public function massacrer($cible){
        echo ("<p>".$this->_speudo." massacre ".$cible->_speudo);
                $this->defense($cible, 20);
    }

    //méthode deffence
    public function defense($cible, $dégâts){
        $cible->_vie -= $dégâts;
        echo ("<p>".$cible->_speudo." a perdu <b>".$dégâts."</b> organes</p>");
        $query = $this->bdd2 ->query("UPDATE `perso` SET `speudo`= biden, `vie`=100 WHERE id= 1"); 
    }

 }
