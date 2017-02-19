<?php

include 'modele.php';

function listeAnimaux() {
    $cnx = getBD();
    $sql = 'SELECT * FROM animaux';
    $sql2 = 'SELECT
                DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
                -
                DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age"
                FROM animaux';
    $sql3 = 'SELECT idAnimaux, nomEspece FROM animaux, especes
             WHERE animaux.idEspece = especes.idEspece';
    $sql4 = 'SELECT idAnimaux, sexe FROM animaux, sexe
             WHERE animaux.idSexe = sexe.idSexe;';
    $reqListeAnimaux = executeR($cnx, $sql);
    $reqAgeAnimaux = executeR($cnx, $sql2);
    $reqEspeceAnimaux = executeR($cnx, $sql3);
    $reqSexAnimaux = executeR($cnx, $sql4);
    $tabReq = [$reqListeAnimaux, $reqAgeAnimaux, $reqEspeceAnimaux, $reqSexAnimaux];
    return $tabReq;
}
