<?php

include 'modele.php';

function consulterFiche($reference) {
    $cnx = getBD();
    $sql = "SELECT * FROM animaux WHERE idAnimaux = ?";
    $sql2 = "SELECT
                DATE_FORMAT(CURRENT_DATE,'%Y-%m-%d')
                -
                DATE_FORMAT(date_naissance,'%Y-%m-%d') 'Age'
                FROM animaux
                WHERE idAnimaux = ?";
    $sql3 = "SELECT idAnimaux, nomEspece FROM animaux, especes
             WHERE animaux.idEspece = especes.idEspece
             AND idAnimaux = ?";
    $sql4 = "SELECT idAnimaux, sexe FROM animaux, sexe
             WHERE animaux.idSexe = sexe.idSexe
             AND idAnimaux = ?";
    $sql5 = "SELECT idAnimaux, nomPays FROM animaux, pays
             WHERE animaux.idPays = pays.idPays
             AND idAnimaux = ?";
    $reqConsAnimal = executeR($cnx, $sql, array($reference));
    $reqAgeAnimal = executeR($cnx, $sql2, array($reference));
    $reqEspeceAnimal = executeR($cnx, $sql3, array($reference));
    $reqSexAnimal = executeR($cnx, $sql4, array($reference));
    $reqPaysAnimal = executeR($cnx, $sql5, array($reference));
    $tabReqConsult = [$reqConsAnimal, $reqAgeAnimal, $reqEspeceAnimal, $reqSexAnimal, $reqPaysAnimal];
    return $tabReqConsult;
}
