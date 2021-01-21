<?php
class Personnage4{
//propriéter id , speudo et vie
    private $_id;
    private $_speudo;
    private $_vie;

    public function __construct($bdd, $id){
        $query = $bdd->query("SELECT * FROM perso WHERE id = $id")->fetch(); // requete select msql
        $this->_speudo = $query["speudo"]; 
        $this->_vie = $query["vie"];

    }
    public function stat(){ //methode stat affiche la vie du speudo
        echo"je m'appelle ".$this->_speudo." et j'ai ".$this->_vie." points de vie";
    }


 }
