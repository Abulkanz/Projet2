<?php

require_once 'include/libs/smarty/Smarty.class.php';
$jScript = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';

$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];
$tpl = new Smarty();
$listeAnimaux = [];
$i = 0;

if (isset($_POST['action'])) {
    
    //Liste via recherche ou tri
    if (!$ligne = $reqRech->fetch()) {
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
                        <th>Age</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>';
        do {
            $listeAnimaux[$i]['idAnimal'] = $ligne['idAnimaux'];
            $listeAnimaux[$i]['photo'] = '<form method="POST" action="index.php">
                                            <input type="hidden" name="gestion" value="animaux">
                                            <input type="hidden" name="action" value="consulter">
                                            <input type="hidden" name="consulter" value="consulter">
                                            <input type="hidden" name="idAnimal" value=' . $ligne['idAnimaux'] . '>
                                            <input class="vignLienFiche" value="" type="submit" style="background-image: url(img/imgFiches/' . $ligne['prenomAnimal'] . 'Tn.png">
                                          </form>';
            $listeAnimaux[$i]['prenomAnimal'] = $ligne['prenomAnimal'];
            $listeAnimaux[$i]['nomEspece'] = $ligne['nomEspece'];
            $listeAnimaux[$i]['sexe'] = $ligne['Sexe'];
            if ($listeAnimaux[$i]['sexe'] == 'M') {
                $listeAnimaux[$i]['sexe'] = 'Male';
            } else {
                $listeAnimaux[$i]['sexe'] = 'Femelle';
            }
            $listeAnimaux[$i]['age'] = $ligne['Age'];
            if ($listeAnimaux[$i]['age'] <= 1) {
                $listeAnimaux[$i]['age'] = $listeAnimaux[$i]['age'] . ' an';
            } else {
                $listeAnimaux[$i]['age'] = $listeAnimaux[$i]['age'] . ' ans';
            }
            $listeAnimaux[$i]['statut'] = $ligne['StatutA'];
            if ($listeAnimaux[$i]['statut'] == NULL) {
                $listeAnimaux[$i]['statut'] = "Présent";
            }
            $i++;
        } while ($ligne = $reqRech->fetch(PDO::FETCH_ASSOC));
        $aucRes = '';
        $nbLignes = $reqRech->rowCount();
    }
    
} else {
    //Liste complète par défaut
    if ($ligne = $reqListe->fetch()) {
        $initTable = '<table class="tAnimaux">
                    <tr>
                        <th>Photo</th>
                        <th>Prénom</th>
                        <th>Espèce</th>
                        <th>Sexe</th>
                        <th>Age</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>';

        do {
            $listeAnimaux[$i]['idAnimal'] = $ligne['idAnimaux'];
            $listeAnimaux[$i]['photo'] = '<form method="POST" action="index.php">
                                            <input type="hidden" name="gestion" value="animaux">
                                            <input type="hidden" name="action" value="consulter">
                                            <input type="hidden" name="consulter" value="consulter">
                                            <input type="hidden" name="idAnimal" value=' . $ligne['idAnimaux'] . '>
                                            <input class="vignLienFiche" value="" type="submit" style="background-image: url(img/imgFiches/' . $ligne['prenomAnimal'] . 'Tn.png">
                                          </form>';
            $listeAnimaux[$i]['prenomAnimal'] = $ligne['prenomAnimal'];
            $listeAnimaux[$i]['nomEspece'] = $ligne['nomEspece'];
            $listeAnimaux[$i]['sexe'] = $ligne['Sexe'];
            if ($listeAnimaux[$i]['sexe'] == 'M') {
                $listeAnimaux[$i]['sexe'] = 'Male';
            } else {
                $listeAnimaux[$i]['sexe'] = 'Femelle';
            }
            $listeAnimaux[$i]['age'] = $ligne['Age'];
            if ($listeAnimaux[$i]['age'] <= 1) {
                $listeAnimaux[$i]['age'] = $listeAnimaux[$i]['age'] . ' an';
            } else {
                $listeAnimaux[$i]['age'] = $listeAnimaux[$i]['age'] . ' ans';
            }
            $listeAnimaux[$i]['statut'] = $ligne['StatutA'];
            if ($listeAnimaux[$i]['statut'] == NULL) {
                $listeAnimaux[$i]['statut'] = "Présent";
            }
            $i++;
        } while ($ligne = $reqListe->fetch(PDO::FETCH_ASSOC));
        $aucRes = '';
        $nbLignes = $reqListe->rowCount();
    }
}


$tpl->assign('msg', 'Liste des Animaux');
$tpl->assign('aucRes', $aucRes);
$tpl->assign('nbLignes', $nbLignes);
$tpl->assign('initTable', $initTable);
$tpl->assign('login', $login);
$tpl->assign('avatar', $avatar);
$tpl->assign('js', $jScript);
$tpl->assign('listeAnimaux', $listeAnimaux);

$tpl->display('vues/animauxVue.tpl');
