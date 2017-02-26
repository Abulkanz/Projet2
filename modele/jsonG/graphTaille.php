<?php

//setting header to json
header('Content-Type: application/json');

require_once '../../include/configuration.php';
require_once '../accueilModele.php';

$reqChart = graphTaille();

foreach ($reqChart as $ligne) {
    $espece[] = $ligne;
}

print json_encode($espece);

