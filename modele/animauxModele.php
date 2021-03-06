<?php

require_once 'modele.php';

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
    $sql6 = 'SELECT nomEspece FROM especes';
    $sql7 = 'SELECT sexe from sexe';
    $sql8 = 'SELECT nomPays from pays';
    $sql9 = 'SELECT DISTINCT statut from animaux';

    $reqConsAnimal = executeR($cnx, $sql, array($reference));
    $reqAgeAnimal = executeR($cnx, $sql2, array($reference));
    $reqEspeceAnimal = executeR($cnx, $sql3, array($reference));
    $reqSexAnimal = executeR($cnx, $sql4, array($reference));
    $reqPaysAnimal = executeR($cnx, $sql5, array($reference));
    $reqEspeces = executeR($cnx, $sql6);
    $reqSexes = executeR($cnx, $sql7);
    $reqPays = executeR($cnx, $sql8);
    $reqStatutAnimal = executeR($cnx, $sql9);

    $tabReqConsult = [
        $reqConsAnimal,
        $reqAgeAnimal,
        $reqEspeceAnimal,
        $reqSexAnimal,
        $reqPaysAnimal,
        $reqEspeces,
        $reqSexes,
        $reqPays,
        $reqStatutAnimal
    ];
    
    return $tabReqConsult;
}

function execSuppr($param) {
    $cnx = getBD();
    $sql = "DELETE FROM animaux WHERE idAnimaux = $param";
    $idRequete = executeR($cnx, $sql);
    Header('Location: index.php?gestion=animaux');
}
