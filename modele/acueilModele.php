<?php
include  'modele.php' ;
function listeca(){
    $cnx=getBD();
    $sql="SELECT * FROM employes";
    $idRequete=  executeRequete($cnx, $sql);
    return $idRequete;
}