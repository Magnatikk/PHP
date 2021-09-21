<?php

require_once 'vue.php';
require_once 'modele.php';

class Controleur {
    #dutinfopw201619 gysezypu BAIL POUR LA BDD
    #http://database-etudiants.iut.univ-paris8.fr/phpmyadmin/

    public $vue;
    public $modele;
    private $action;

	public function __construct (){
        $this->vue = new Vue();
        $this->modele = new Modele();
        
        if(isset($_GET['action'])) {
            $this->action = $_GET['action']; 
        }
        else {
            $this->action = "bienvenue";
        }    
	}

	function liste() {
       $this->vue->affiche_liste($this->modele->getListe());
    }

    function start() {
        $this->vue->menu();
        switch($this->action) {
            case "bienvenue" :
                echo "bienvenue";
                break;
            
            case "liste" :
                $this->liste();
                break;
        }
    }
}

?>