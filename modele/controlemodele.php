<?php
include  'modele.php' ;
include '../include/configuration.php';

if(isset($_POST['login'])){
    $cnx=getBD();
    $login=$_POST['login'];
    $sql="SELECT login FROM employes WHERE login=?";
    $idRequete=executeR($cnx, $sql,array($login));
    if($idRequete->rowCount()==1){
        echo '<span class="no">&nbsp;&#x2718;</span> ce login exite déja';
    }
    else {
        echo '<span class="yes">&nbsp;&#x2714;</span> ce login est disponible';
    }
}
