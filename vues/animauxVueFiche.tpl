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
                                <form id="formAnimal" method="POST" action="index.php" {$onSubmitJs}>
                                    <!--Variable servant de module entre la consultation et la modif-->
                                    {$espSexPays}
                                    <br>
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="numParcelle"><strong>Numero de parcelle : </strong></label>
                                                <input type="text" id="numParcelle" value="{$parcelle}" {$varCRUD}></td>
                                            <td>
                                                <label for="statutAnimal"><strong>Statut actuel : </strong></label>
                                                <input type="text" id="statutAnimal" value="{$statutAnimal}" {$varCRUD}>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="taille"><strong>Taille (cm): </strong></label>
                                                <input type="text" id="taille" value="{$taille}" {$varCRUD}>
                                            </td>
                                            <td>
                                                <label for="poids"><strong>Poids (kg): </strong></label>
                                                <input type="text" id="poids" value="{$poids}" {$varCRUD}>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="dOb"><strong>Né le : </strong></label>
                                                <input type="text" id="dOb" value="{$dOb}" {$varCRUD}>
                                            </td>
                                            <td>
                                                <label for="pOb"><strong>Lieu de Naissance : </strong></label>
                                                <input type="text" id="pOb" value="{$pOb}" {$varCRUD}>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pere"><strong>Père : </strong></label>
                                                <input type="text" id="pere" value="{$pere}" {$varCRUD}>
                                            </td>
                                            <td>
                                                <label for="mere"><strong>Mère : </strong></label>
                                                <input type="text" id="mere" value="{$mere}" {$varCRUD}>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <br>
                                                <textarea from="formAnimal" id="desc" {$varCRUD}>{$description}</textarea>
                                                {$inputEdit}
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </fieldset>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--Balises pour pouvoir concaténer les scripts Js-->
        <script>
            {$js}
        </script>
    </body>
</html>