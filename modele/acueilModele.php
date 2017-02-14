<?php
include  'modele.php' ;
function listeca(){
    $cnx=getBD();
    $sql="SELECT * FROM employe";
    $idRequete=  executeRequete($cnx, $sql);
    return $idRequete;
}