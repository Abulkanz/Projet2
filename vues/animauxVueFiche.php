<?php

require_once 'include/libs/smarty/Smarty.class.php';


$jsCalls = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';

$login = $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];

$tpl = new Smarty();
$ficheAnimal = [];

$jScript = 'function agrImg($param) {
                if ($param.style.position == "absolute") {
                    $param.style.cssText = " width: 100%;object-fit: cover;padding: 1em;";
                    document.getElementById("fsFiche").style.display = "block";
                } else {
                    $param.style.cssText = "width:80%;position:absolute; top:43%; left:50%; transform:translate(-50%, -50%);";
                    document.getElementById("fsFiche").style.display = "none";
                }
            }';

$reqConsAnimal = $tabReqConsult[0];
$reqAgeAnimal = $tabReqConsult[1];
$reqEspeceAnimal = $tabReqConsult[2];
$reqSexAnimal = $tabReqConsult[3];
$reqPaysAnimal = $tabReqConsult[4];
$reqEspeces = $tabReqConsult[5];
$reqSexes = $tabReqConsult[6];
$reqPays = $tabReqConsult[7];
$reqStatuts = $tabReqConsult[8];


if ($ligne = $reqConsAnimal->fetch()) {
    $ficheAnimal['idAnimal'] = $ligne['idAnimaux'];
    $ficheAnimal['photo'] = '<img class="iPortrait" src= "img/imgFiches/' . $ligne['photo'] . '" onclick="agrImg(this)">';
    $ficheAnimal['prenomAnimal'] = $ligne['prenomAnimal'];
    $ficheAnimal['idParcelle'] = $ligne['idParcelle'];
    $ficheAnimal['poids'] = $ligne['poids'];
    $ficheAnimal['taille'] = $ligne['taille'];
    $ficheAnimal['dateNaissance'] = $ligne['date_naissance'];
    $ficheAnimal['lieuNaissance'] = $ligne['lieu_naissance'];
    $ficheAnimal['statut'] = $ligne['statut'];
    if ($ligne['statut'] == NULL) {
        $ligne['statut'] = "Présent";
    }
    $ficheAnimal['description'] = $ligne['description'];
    $ficheAnimal['pere'] = $ligne['pere'];
    if ($ficheAnimal['pere'] == NULL) {
        $ficheAnimal['pere'] = "Inconnu";
    }
    $ficheAnimal['mere'] = $ligne['mere'];
    if ($ficheAnimal['mere'] == NULL) {
        $ficheAnimal['mere'] = "Inconnue";
    }
//Recupération de l'age
    if ($ligne2 = $reqAgeAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['age'] = $ligne2['Age'];
    }
//Recuperation de l'espèce
    if ($ligne3 = $reqEspeceAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['nomEspece'] = $ligne3['nomEspece'];
    }
//Recuperation du sexe
    if ($ligne4 = $reqSexAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['sexe'] = $ligne4['sexe'];
        if ($ficheAnimal['sexe'] == 'M') {
            $ficheAnimal['sexe'] = 'Mâle';
        } else {
            $ficheAnimal['sexe'] = 'Femelle';
        }
    }
//Recuperation du pays d'origine
    if ($ligne5 = $reqPaysAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['pays'] = $ligne5['nomPays'];
    }

    $erreur = "";
} else {
    $erreur = "<p>Une erreur est survenue</p>";
}

switch ($_POST['action']) {
    case 'supprimer' :
        $varCRUD = 'style="border-style:none;" readonly';
        $onSubmitJs = 'onsubmit="return validForm()"';
        $jScript = $jScript . ' function validForm() {
                    var choix = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");
                    if (choix === true) {
                        return true;
                        } else {
                        return false;
                        }
                    }';
        $listeEsp = null;
        $listeSexes = null;
        $listePays = null;
        $listeStatuts = null;
        $endList = null;
        $initListEsp = null;
        $initListSex = null;
        $initListPays = null;
        $initListStatuts = null;
        $initOptions = null;
        $initOptionsSelected = null;
        $milOptions = null;
        $endOptions = null;
        $initEspSexPays = '<strong class="espAnimal">';
        $varInitSpanHidden = '';
        $varEndSpanHidden = '';
        $esp = $ficheAnimal['nomEspece'];
        $sex = $ficheAnimal['sexe'];
        $pays = ' ' . $ficheAnimal['pays'] . '';
        $endEspSexPays = '</strong>';
        $inputEdit = '<input type = "hidden" name = "idAnimal" value = "' . $ficheAnimal['idAnimal'] . '">
        <input type = "hidden" name = "gestion" value = "animaux">
        <input type = "hidden" name = "action" value = "supprimer">
        <input type = "submit" name = "valSuppr" value = "Supprimer">';
        break;
    case 'modifier' :

        //Génération du select "lisEspeces"
        if ($ligne6 = $reqEspeces->fetch(PDO::FETCH_ASSOC)) {
            $i = 0;
            $initListEsp = '<select id="listEspeces" name="selectEsp">';
            $initOptions = '<option value="';
            $initOptionsSelected = '<option selected="selected" value="';
            $milOptions = '">';
            $endOptions = '</options>';
            $endList = '</select>';
            do {
                $listeEsp['espece' . $i] = $ligne6['nomEspece'];
                $i++;
            } while ($ligne6 = $reqEspeces->fetch(PDO::FETCH_ASSOC));
        } else {
            $initOptions = null;
            $initOptionsSelected = null;
            $milOptions = null;
            $endOptions = null;
            $listeEsp = null;
        }

        //Génération du select "lisSex"
        if ($ligne7 = $reqSexes->fetch(PDO::FETCH_ASSOC)) {
            $i = 0;
            $initListSex = '<select id="listSex" name="selectSex">';
            $initOptions = '<option value="';
            $initOptionsSelected = '<option selected="selected" value="';
            $milOptions = '">';
            $endOptions = '</options>';
            $endList = '</select>';
            do {
                $listeSexes['sexe' . $i] = $ligne7['sexe'];
                if ($listeSexes['sexe' . $i] == 'M') {
                    $listeSexes['sexe' . $i] = 'Mâle';
                } else {
                    $listeSexes['sexe' . $i] = 'Femelle';
                }
                $i++;
            } while ($ligne7 = $reqSexes->fetch(PDO::FETCH_ASSOC));
        } else {
            $initOptions = null;
            $initOptionsSelected = null;
            $milOptions = null;
            $endOptions = null;
            $listeSexes = null;
        }

        //Génération du select "listPays"
        if ($ligne8 = $reqPays->fetch(PDO::FETCH_ASSOC)) {
            $i = 0;
            $initListPays = '<select id="listEspeces" name="selectEsp">';
            $initOptions = '<option value="';
            $initOptionsSelected = '<option selected="selected" value="';
            $milOptions = '">';
            $endOptions = '</options>';
            $endList = '</select>';
            do {
                $listePays['pays' . $i] = $ligne8['nomPays'];
                $i++;
            } while ($ligne8 = $reqPays->fetch(PDO::FETCH_ASSOC));
        } else {
            $initOptions = null;
            $initOptionsSelected = null;
            $milOptions = null;
            $endOptions = null;
            $listePays = null;
        }

        //Génération du select "listStatuts"
        if ($ligne9 = $reqStatuts->fetch(PDO::FETCH_ASSOC)) {
            $i = 0;
            $initListStatuts = '<select id="listEspeces" name="selectEsp">';
            $initOptions = '<option value="';
            $initOptionsSelected = '<option selected="selected" value="';
            $milOptions = '">';
            $endOptions = '</options>';
            $endList = '</select>';
            do {
                $listeStatuts['statut' . $i] = $ligne9['statut'];
                if ($listeStatuts['statut' . $i] == NULL) {
                    $listeStatuts['statut' . $i] = "Présent";
                }
                $i++;
            } while ($ligne9 = $reqStatuts->fetch(PDO::FETCH_ASSOC));
        } else {
            $initOptions = null;
            $initOptionsSelected = null;
            $milOptions = null;
            $endOptions = null;
            $listePays = null;
        }

        $initEspSexPays = null;
        $endEspSexPays = null;
        $onSubmitJs = null;
        $varCRUD = null;
        $varInitSpanHidden = '<span style="display: none;">';
        $esp = $ficheAnimal['nomEspece'];
        $varEndSpanHidden = '</span>';
        $sex = '<input type="text" name="sexe" value="' . $ficheAnimal['sexe'] . '">';
        $pays = '<input type="text" name="pays" value="' . $ficheAnimal['pays'] . '">';


        $inputEdit = '<input type = "hidden" name = "idAnimal" value = "' . $ficheAnimal['idAnimal'] . '">
        <input type = "hidden" name = "gestion" value = "animaux">
        <input type = "hidden" name = "action" value = "modifier">
        <input type = "submit" name = "valModif" value = "Modifier">';
        break;
    case 'consulter' :
        $initListEsp = null;
        $initListSex = null;
        $initListPays = null;
        $initListStatuts = null;
        $initOptions = null;
        $initOptionsSelected = null;
        $milOptions = null;
        $endOptions = null;
        $listeEsp = null;
        $listeSexes = null;
        $listePays = null;
        $listeStatuts = null;
        $endList = null;
        $onSubmitJs = null;
        $varCRUD = 'style = "border-style:none;" readonly';
        $initEspSexPays = '<strong class="espAnimal">';
        $varInitSpanHidden = '';
        $esp = $ficheAnimal['nomEspece'];
        $varEndSpanHidden = '';
        $sex = $ficheAnimal['sexe'];
        $pays = $ficheAnimal['pays'];
        $endEspSexPays = '</strong>';

        $inputEdit = null;
        break;
}

//Bloc assignations balises "<select>" (modification)
$tpl->assign('initListEsp', $initListEsp);
$tpl->assign('initListSex', $initListSex);
$tpl->assign('initListPays', $initListPays);
$tpl->assign('initListStatuts', $initListStatuts);
$tpl->assign('initOptions', $initOptions);
$tpl->assign('initOptionsSelected', $initOptionsSelected);
$tpl->assign('milOptions', $milOptions);
$tpl->assign('endOptions', $endOptions);
$tpl->assign('endList', $endList);
$tpl->assign('inputEdit', $inputEdit);
$tpl->assign('varCRUD', $varCRUD);
$tpl->assign('varInitSpanHidden', $varInitSpanHidden);
$tpl->assign('varEndSpanHidden', $varEndSpanHidden);
$tpl->assign('esp', $esp);
$tpl->assign('sex', $sex);
$tpl->assign('pays', $pays);
$tpl->assign('listeEspeces', $listeEsp);
$tpl->assign('listeSexes', $listeSexes);
$tpl->assign('listePays', $listePays);
$tpl->assign('listeStatuts', $listeStatuts);
$tpl->assign('initEspSexPays', $initEspSexPays);
$tpl->assign('endEspSexPays', $endEspSexPays);
$tpl->assign('photo', $ficheAnimal['photo']);
$tpl->assign('sexe', $ficheAnimal['sexe']);
$tpl->assign('numero', $ficheAnimal['idAnimal']);
$tpl->assign('parcelle', $ficheAnimal['idParcelle']);
$tpl->assign('espece', $ficheAnimal['nomEspece']);
$tpl->assign('statutAnimal', $ligne['statut']);
$tpl->assign('prenom', $ficheAnimal['prenomAnimal']);
$tpl->assign('poids', $ficheAnimal['poids']);
$tpl->assign('taille', $ficheAnimal['taille']);
$tpl->assign('dOb', $ficheAnimal['dateNaissance']);
$tpl->assign('pOb', $ficheAnimal['lieuNaissance']);
$tpl->assign('statut', $ficheAnimal['idAnimal']);
$tpl->assign('description', $ficheAnimal['description']);
$tpl->assign('pere', $ficheAnimal['pere']);
$tpl->assign('mere', $ficheAnimal['mere']);

$tpl->assign('login', $login);
$tpl->assign('avatar', $avatar);
$tpl->assign('onSubmitJs', $onSubmitJs);
$tpl->assign('jsCalls', $jsCalls);
$tpl->assign('js', $jScript);

$tpl->display('vues/animauxVueFiche.tpl');

