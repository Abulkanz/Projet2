<?php

require_once 'modele.php';

function graphTaille() {

    $cnx = getBD();

    $req = 'SELECT nomEspece, ROUND(AVG(taille), 2) "tMoyenne" 
            FROM animaux, especes
            WHERE animaux.idEspece = especes.idEspece 
            GROUP BY 1';

    $reqChart = executeR($cnx, $req);
    return $reqChart;
}

function graphPoids() {
    $cnx = getBD();

    $req = 'SELECT nomEspece, ROUND(AVG(poids), 2) "pMoyen" 
            FROM animaux, especes
            WHERE animaux.idEspece = especes.idEspece 
            GROUP BY 1';

    $reqChart = executeR($cnx, $req);
    return $reqChart;
}