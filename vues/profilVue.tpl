<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
        <link href="style/dropdown.css" rel="stylesheet">
        <title>Projet2</title>
    </head>
    <body>
        <div class="conteneur noOverF">
            <img class="logo" src="img/logoSinges.png">
            <header>
                <ul>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="accueil">
                            <input class="lienNav" type="submit" value="Accueil">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="animaux">
                            <input class="lienNav" type="submit" value="Animaux">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="login">
                            <input class="lienNav" type="submit" value="Carte">
                        </form>
                    </li>
                    <li><input class="lienNav" type="submit" name="lignes_commande" value="Statistiques"></li>
                    <li class="dropdown">
                        <span class="dropbtn" onclick="displayMenuUser()"><img class="avatar"  onclick="displayMenuUser()" src="img/userlogof.png"><span class="username"  onclick="displayMenuUser()">{$login}</span></span>
                        <div class="dropdown-content" id="menuUser">
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="action" value="profil">
                                    <input type="hidden" name="identifiant" value="{$login}">
                                    <img src="img/userlogof.png" style="width:20px; margin-right:5px">Profil
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="animaux">
                                    <img src="img/icone_aide.png" style="width:20px; margin-right:5px">Aide
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                 <button class="lienNav">
                                    <input type="hidden" name="gestion" value="accueil">
                                    <input type="hidden" name="action" value="deconnexion">
                                    <img src="img/iconedeconnexion.png" style="width:15px; margin-right:5px">Déconnexion
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </header>
            <div id="fiche">
                <table id="tFiche">
                    <tr>
                        <td>
                            <img class="avataruser" src="img/{$avatar}">
                        </td>
                        <td id="chpDesc">
                            {foreach from=$profilEmploye item=Employe}
                            <fieldset id="fsFiche">
                                <legend class="nomAnimal"><strong>Fiche de l'employe</strong></legend>
                                <form id="formAnimal" method="POST" action="index.php">
                                    <strong class="espAnimal">{$Employe.login}</strong>
                                    <br>
                                    <label for="numParcelle"><strong>Civilite</strong></label>
                                    <input type="text" id="numParcelle" value="{$Civilite}">
                                    <br>
                                    <label for="taille"><strong>Nom</strong></label>
                                    <input type="text" id="taille" value="{$Employe.nomEmploye}">
                                    <br>
                                    <label for="poids"><strong>Prenom</strong></label>
                                    <input type="text" id="poids" value="{$Employe.prenomEmploye}">
                                    <br>
                                    <label for="dOb"><strong>Fonction</strong></label>
                                    <input type="text" id="dOb" value="{$Employe.fonction}">
                                    <br>
                                    <label for="pOb"><strong>Adresse mail</strong></label>
                                    <input type="text" id="pOb" value="{$Employe.adressemail}">
                                    <br>
                                    <label for="pere"><strong>Droits</strong></label>
                                    <input type="text" id="pere" value="{$Employe.droits}">
                                </form>
                            </fieldset>
                            {/foreach}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script>
            function agrImg($param) {
                if ($param.style.position == "absolute") {
                    $param.style.cssText = " width: 100%;object-fit: cover;padding: 1em;";
                    document.getElementById("fsFiche").style.display = "block";
                } else {
                    $param.style.cssText = "width:80%;position:absolute; top:43%; left:50%; transform:translate(-50%, -50%);";
                    document.getElementById("fsFiche").style.display = "none";
                }
            }
        </script>
        {$js} 
    </body>
</html>