<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$listeAnimaux = [];
$reqListeAnimaux = $tabReq[0];
$reqAgeAnimaux = $tabReq[1];
$reqEspeceAnimaux = $tabReq[2];
$reqSexAnimaux = $tabReq[3];
$i = 0;


if (isset($_POST['action'])) {

    if (!$ligne = $reqListeAnimaux->fetch()) {
        $aucRes = '<p class="aucRes">--La recherche ne fournit aucun resultat--</p>';
        $nbLignes = '';
        $initTable = '';
    } else {
        $initTable = '<table class="tAnimaux">
                    <tr>
                        <th>Photo</th>
                        <th>Prénom</th>
                        <th>Espèce</th>
                        <th>Sexe</th>
                        <th>Poids</th>
                        <th>Taille</th>
                        <th>Date de naissance</th>
                        <th>Age</th>
                        <th>Lieu de naissance</th>
                        <th>Statut</th>
                    </tr>';

        while ($ligne = $reqListeAnimaux->fetch(PDO::FETCH_ASSOC)) {
            $listeAnimaux[$i]['photo'] = '<img style="background: url(../img/imgFiches/' . $ligne['photo'] . 'Tn.png) center;">';
            $listeAnimaux[$i]['prenomAnimal'] = $ligne['prenomAnimal'];
            $listeAnimaux[$i]['poids'] = $ligne['poids'];
            $listeAnimaux[$i]['taille'] = $ligne['taille'];
            $listeAnimaux[$i]['dateNaissance'] = $ligne['date_naissance'];
            $listeAnimaux[$i]['lieuNaissance'] = $ligne['lieu_naissance'];
            $listeAnimaux[$i]['statut'] = $ligne['statut'];
            $i++;
        }
        //Recupération de l'age
        $i = 0;
        while ($ligne2 = $reqAgeAnimaux->fetch(PDO::FETCH_ASSOC)) {
            $listeAnimaux[$i]['age'] = $ligne2['Age'];
            $i++;
        }
        //Recuperation de l'espèce
        $i = 0;
        while ($ligne3 = $reqEspeceAnimaux->fetch(PDO::FETCH_ASSOC)) {
            $listeAnimaux[$i]['nomEspece'] = $ligne3['nomEspece'];
            $i++;
        }
        //Recuperation du sexe
        $i = 0;
        while ($ligne4 = $reqSexAnimaux->fetch(PDO::FETCH_ASSOC)) {
            $listeAnimaux[$i]['sexe'] = $ligne4['sexe'];
            if ($listeAnimaux[$i]['sexe'] == 'M') {
                $listeAnimaux[$i]['sexe'] == 'Male';
            } else {
                $listeAnimaux[$i]['sexe'] == 'Femelle';
            }
            $i++;
        }
        $aucRes = '';
        $nbLignes = $reqListeAnimaux->rowCount();
    }
} else {
    $initTable = '<table class="tAnimaux">
                    <tr>
                        <th>Photo</th>
                        <th>Prénom</th>
                        <th>Espèce</th>
                        <th>Sexe</th>
                        <th>Poids</th>
                        <th>Taille</th>
                        <th>Date de naissance</th>
//                        <th>Age</th>
                        <th>Lieu de naissance</th>
                        <th>Statut</th>
                    </tr>';

    while ($ligne = $reqListeAnimaux->fetch(PDO::FETCH_ASSOC)) {
        $listeAnimaux[$i]['photo'] = '<input class="vignLienFiche" value="" type="submit" style="background-image: url(img/imgFiches/' . $ligne['prenomAnimal'] . 'Tn.png">';
        $listeAnimaux[$i]['prenomAnimal'] = $ligne['prenomAnimal'];
        $listeAnimaux[$i]['poids'] = $ligne['poids'];
        $listeAnimaux[$i]['taille'] = $ligne['taille'];
        $listeAnimaux[$i]['dateNaissance'] = $ligne['date_naissance'];
        $listeAnimaux[$i]['lieuNaissance'] = $ligne['lieu_naissance'];
        $listeAnimaux[$i]['statut'] = $ligne['statut'];
        $i++;
    }

    //Recupération de l'age des bêtes
    $i = 0;
    while ($ligne2 = $reqAgeAnimaux->fetch(PDO::FETCH_ASSOC)) {
        $listeAnimaux[$i]['age'] = $ligne2['Age'];
        $i++;
    }
    //Recuperation de l'espèce
    $i = 0;
    while ($ligne3 = $reqEspeceAnimaux->fetch(PDO::FETCH_ASSOC)) {
        $listeAnimaux[$i]['nomEspece'] = $ligne3['nomEspece'];
        $i++;
    }
    //Recuperation du sexe
    $i = 0;
    while ($ligne4 = $reqSexAnimaux->fetch(PDO::FETCH_ASSOC)) {
        $listeAnimaux[$i]['sexe'] = $ligne4['sexe'];
        if ($listeAnimaux[$i]['sexe'] == 'M') {
            $listeAnimaux[$i]['sexe'] == 'Male';
        } else {
            $listeAnimaux[$i]['sexe'] == 'Femelle';
        }
        $i++;
    }
    $aucRes = '';
    $nbLignes = $reqListeAnimaux->rowCount();
}


$tpl->assign('msg', 'Liste des Animaux');
$tpl->assign('aucRes', $aucRes);
$tpl->assign('nbLignes', $nbLignes);
$tpl->assign('initTable', $initTable);
$tpl->assign('listeAnimaux', $listeAnimaux);












$tpl->display('vues/animauxVue.tpl');
