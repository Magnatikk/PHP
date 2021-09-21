<?php

class Connexion {
    protected static $bdd;

    public static function initConnexion() {
        $dns = "mysql:host=database-etudiants.iut.univ-paris8.fr; dbname = dutinfopw201619";
        $user = "dutinfopw201619";
        $password = "gysezypu";
        $connexion = new PDO($dns, $user, $password);

    }





}    