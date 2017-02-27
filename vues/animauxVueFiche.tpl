<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
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
                    <img class="avatar" src="img/avatarTest.png" alt=""/>
                </ul>
            </header>
            <div id="fiche">
                <table id="tFiche">
                    <tr>
                        <td>
                            {$photo}
                        </td>
                        <td id="chpDesc">
                            <fieldset id="fsFiche">
                                <legend class="nomAnimal"><strong>{$prenom} (Id n°{$numero})</strong></legend>
                                <form id="formAnimal">
                                    <strong class="espAnimal">{$espece} ({$pays})</strong>
                                    <br>
                                    <label for="numParcelle"><strong>Numero de parcelle : </strong></label>
                                    <input type="text" id="numParcelle" value="{$parcelle}" {$varCRUD}>
                                    <br>
                                    <label for="taille"><strong>Taille (cm): </strong></label>
                                    <input type="text" id="taille" value="{$taille}" {$varCRUD}>
                                    <br>
                                    <label for="poids"><strong>Poids (kg): </strong></label>
                                    <input type="text" id="poids" value="{$poids}" {$varCRUD}>
                                    <br>
                                    <label for="dOb"><strong>Né le : </strong></label>
                                    <input type="text" id="dOb" value="{$dOb}" {$varCRUD}>
                                    <br>
                                    <label for="pOb"><strong>Lieu de Naissance : </strong></label>
                                    <input type="text" id="pOb" value="{$pOb}" {$varCRUD}>
                                    <br>
                                    <label for="pere"><strong>Père : </strong></label>
                                    <input type="text" id="pere" value="{$pere}" {$varCRUD}>
                                    <br>
                                    <label for="mere"><strong>Mère : </strong></label>
                                    <input type="text" id="mere" value="{$mere}" {$varCRUD}>
                                    <br>
                                    <br>
                                    <textarea from="formAnimal" id="desc" {$varCRUD}>{$description}</textarea>
                                    {$inputEdit}
                                </form>
                            </fieldset>
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
    </body>
</html>