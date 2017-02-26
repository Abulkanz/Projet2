<?php

//setting header to json
header('Content-Type: application/json');

//require_once '../../include/configuration.php';
//require_once '../modele.php';
//
//$cnx = getBD();
//
//$req = 'SELECT idAnimaux,
//               DATE_FORMAT(CURRENT_DATE,"%Y-%m-%d")
//               -
//               DATE_FORMAT(date_naissance,"%Y-%m-%d") "Age",
//        FROM animaux, especes
//        WHERE animaux.idEspece = especes.idEspece 
//        AND idAnimaux = ';
//
//$reqChart = executeR($cnx, $req);
require_once 'animauxModele.php';

foreach ($reqChart as $ligne){
    $espece[] = $ligne;
};

print json_encode($espece);