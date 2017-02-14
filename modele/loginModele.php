<?php
include  'modele.php' ;
function validationauth($param){
    $tmp_login=$_POST['f_login'];
    $tmp_pw=$_POST['f_pw'];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE idConnexion='$tmp_login'";
    $idRequete=  executeRequete($cnx, $sql);
    
    return $idRequete;
} 