<?php

class Modele {
	public function __construct (){
        $tab = array (array("id"=>1, "nom"=>"Zidane"), array("id"=>2, "nom"=> "Henry"), array("id"=>3, "nom"=>"Mbappé"), array("id"=>4, "nom"=>"Rami" ));
	}

	function getListe() {
        $tab = array (array("id"=>1, "nom"=>"Zidane"), array("id"=>2, "nom"=> "Henry"), array("id"=>3, "nom"=>"Mbappé"), array("id"=>4, "nom"=>"Rami" ));
        return $tab;
    }
}


?>