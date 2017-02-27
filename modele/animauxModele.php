<?php

include 'modele.php';

function listeAnimaux() {
    $cnx = getBD();
    $reqListe = 'SELECT DISTINCT
                            idAnimaux,
                            prenomAnimal, 
                            nomEspece, 
                            sexe.sexe "Sexe", 
			    DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
                            -
                            DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age",
                            animaux.statut "StatutA"
                            FROM animaux
            LEFT JOIN pays
            ON animaux.idPays = pays.idPays
            LEFT JOIN especes
            ON animaux.idEspece = especes.idEspece
            LEFT JOIN sexe
            ON animaux.idSexe = sexe.idSexe
            LEFT JOIN continent
            ON pays.idContinent = continent.idContinent';
    $reqListe = executeR($cnx, $reqListe);
    return $reqListe;
}

function listeRech($param) {
    $cnx = getBD();
    $objetRech = "%" . $param['objRech'] . "%";
    $choix = $param['selection'];
    $reqRech = 'SELECT DISTINCT
                            idAnimaux,
                            prenomAnimal, 
                            nomEspece, 
                            sexe.sexe "Sexe", 
			    DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
                            -
                            DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age",
                            animaux.statut "StatutA"
                            FROM animaux
            LEFT JOIN pays
            ON animaux.idPays = pays.idPays
            LEFT JOIN especes
            ON animaux.idEspece = especes.idEspece
            LEFT JOIN sexe
            ON animaux.idSexe = sexe.idSexe
            LEFT JOIN continent
            ON pays.idContinent = continent.idContinent
            WHERE prenomAnimal LIKE "' . $objetRech . '"
            OR nomPays LIKE "' . $objetRech . '"
            OR nomEspece LIKE "' . $objetRech . '"
            OR animaux.statut LIKE "' . $objetRech . '"
            OR especes.statut LIKE "' . $objetRech . '"
            OR lieu_naissance LIKE "' . $objetRech . '"
            OR nomContinent LIKE "' . $objetRech . '"
            ORDER BY ' . $choix . '';
    $reqRech = executeR($cnx, $reqRech);
    return $reqRech;
}

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

function modifierFiche($reference) {
    $ref = '"' . $reference . '"';
    $cnx = getBD();
//    $reqModif = 'SELECT DISTINCT
//                            idAnimaux,
//                            prenomAnimal, 
//                            nomEspece, 
//                            sexe.sexe "Sexe", 
//			    DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
//                            -
//                            DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age",
//                            pays.nomPays "Pays"
//                            FROM animaux
//            LEFT JOIN pays
//            ON animaux.idPays = pays.idPays
//            LEFT JOIN especes
//            ON animaux.idEspece = especes.idEspece
//            LEFT JOIN sexe
//            ON animaux.idSexe = sexe.idSexe
//            WHERE idAnimaux LIKE '.$ref.'';
//    $reqModif = executeR($cnx, $reqModif);
    $sql = 'SELECT * FROM animaux WHERE idAnimaux = ' . $ref . '';
    $sql2 = 'SELECT
                DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
                -
                DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age"
                FROM animaux
                WHERE idAnimaux = ' . $ref . '';
    $sql3 = 'SELECT idAnimaux, nomEspece FROM animaux, especes
             WHERE animaux.idEspece = especes.idEspece
             AND idAnimaux = ' . $ref . '';
    $sql4 = 'SELECT idAnimaux, sexe FROM animaux, sexe
             WHERE animaux.idSexe = sexe.idSexe
             AND idAnimaux = ' . $ref . '';
    $sql5 = 'SELECT idAnimaux, nomPays FROM animaux, pays
             WHERE animaux.idPays = pays.idPays
             AND idAnimaux = ' . $ref . '';
    $reqConsAnimal = executeR($cnx, $sql, array($reference));
    $reqAgeAnimal = executeR($cnx, $sql2, array($reference));
    $reqEspeceAnimal = executeR($cnx, $sql3, array($reference));
    $reqSexAnimal = executeR($cnx, $sql4, array($reference));
    $reqPaysAnimal = executeR($cnx, $sql5, array($reference));
    $tabReqModif = [$reqConsAnimal, $reqAgeAnimal, $reqEspeceAnimal, $reqSexAnimal, $reqPaysAnimal];
    return $tabReqModif;
}


