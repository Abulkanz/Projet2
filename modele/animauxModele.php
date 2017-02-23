<?php

include 'modele.php';

function listeAnimaux() {
    $cnx = getBD();
    $sql = 'SELECT * FROM animaux ORDER BY idAnimaux';
    $sql2 = 'SELECT
                DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
                -
                DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age"
                FROM animaux';
    $sql3 = 'SELECT idAnimaux, nomEspece FROM animaux, especes
             WHERE animaux.idEspece = especes.idEspece
             ORDER BY idAnimaux';
    $sql4 = 'SELECT idAnimaux, sexe FROM animaux, sexe
             WHERE animaux.idSexe = sexe.idSexe
             ORDER BY idAnimaux';
    $reqListeAnimaux = executeR($cnx, $sql);
    $reqAgeAnimaux = executeR($cnx, $sql2);
    $reqEspeceAnimaux = executeR($cnx, $sql3);
    $reqSexAnimaux = executeR($cnx, $sql4);
    $tabReqListe = [$reqListeAnimaux, $reqAgeAnimaux, $reqEspeceAnimaux, $reqSexAnimaux];
    return $tabReqListe;
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
            ORDER BY ' . $choix . '';
    $reqRech = executeR($cnx, $reqRech);
    return $reqRech;
}
