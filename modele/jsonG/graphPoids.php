<?php

//setting header to json
header('Content-Type: application/json');

require_once '../../include/configuration.php';
require_once '../modele.php';

$cnx = getBD();

$req = "SELECT nomEspece, ROUND(AVG(poids), 2) 'pMoyen' 
        FROM animaux, especes
        WHERE animaux.idEspece = especes.idEspece 
        GROUP BY 1";

$reqChart = executeR($cnx, $req);


foreach ($reqChart as $ligne){
    $espece[] = $ligne;
};

print json_encode($espece);

