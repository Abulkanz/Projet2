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
            ORDER BY ' . $choix . '';
    $reqRech = executeR($cnx, $reqRech);
    return $reqRech;
}


