<?php

function executeR($logIn, $sql, $arg = null) {
    if ($arg == null) {
        $resReque = $logIn->query($sql);
    } else {
        $resReque = $logIn->prepare($sql);
        $resReque->execute($arg);
    }
    return $resReque;
}

function getBD() {
    $cnx = connexion(SERVEUR, UTILISATEUR, MOTDEPASSE, BASEDEDONNEES);
    return $cnx;
}

function connexion($serv, $util, $mdp, $bdd) {
    $logIn = new PDO('mysql:host=' . $serv . ';dbname=' . $bdd, $util, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $logIn;
}


