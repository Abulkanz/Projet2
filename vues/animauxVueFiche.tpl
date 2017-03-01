<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/dropdown.css" rel="stylesheet" type="text/css"/>
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
                        <form method="POST" action="index.php">
                            <input type="text" name="objRech" placeholder="Rechercher">
                            <input type="hidden" name="gestion" value="animaux">
                            <input type="hidden" name="action" value="rechercher">
                            <input type="submit" name="rechAnimal" value="->">
                            <label for="tri">Trier par</label>
                            <select id="tri" name="selection">
                                <option selected="selected" value="prenomAnimal">Prénom</option>
                                <option value="nomEspece">Espèce</option>
                                <option value="Sexe">Sexe</option>
                                <option value="Age">Age</option>
                                <option value="StatutA">Statut</option>
                            </select>
                        </form>
                    </li>
                    <li class="dropdown">
                        <img class="avatar dropbtn"  onclick="displayMenuUser()" src="img/userlogof.png">
                        <span class="username dropbtn"  onclick="displayMenuUser()">
                            {$login}
                        </span>
                        <i class="fa fa-caret-down" aria-hidden="true" style="color:white;"></i>
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
                                    <input type="hidden" name="gestion" value="aide">
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
            <table id="tFiche">
                <tr>
                    <td>
                        {$photo}
                    </td>
                    <td id="chpDesc">
                        <fieldset id="fsFiche">
                            <legend class="nomAnimal"><strong>{$prenom} (Id n°{$numero})</strong></legend>
                            <form id="formAnimal" method="POST" action="index.php" {$onSubmitJs}>
                                <!--Traitement servant de module entre la consultation et la modif-->
                                {$initEspSexPays}
                                <!--Select de l'espèce (modification)-->
                                {$initListEsp}
                                {foreach from=$listeEspeces key="refEsp" item="Esp"}
                                    {if $Esp == $esp}
                                        {$initOptionsSelected}{$refEsp}{$milOptions}{$Esp}{$endOptions}
                                    {else}
                                        {$initOptions}{$refEsp}{$milOptions}{$Esp}{$endOptions}
                                    {/if}
                                {/foreach}
                                {$endList}
                                <!--Select du sexe (modification)-->
                                {$initListSex}
                                {foreach from=$listeSexes key="refSex" item="Sexe"}
                                    {if $Esp == $esp}
                                        {$initOptionsSelected}{$refSex}{$milOptions}{$Sexe}{$endOptions}
                                    {else}
                                        {$initOptions}{$refSex}{$milOptions}{$Sexe}{$endOptions}
                                    {/if}
                                {/foreach}
                                {$endList}      
                                <!--Select du pays (modification)-->
                                {$initListPays}
                                {foreach from=$listeEspeces key="refPays" item="Pays"}
                                    {if $Esp == $esp}
                                        {$initOptionsSelected}{$refPays}{$milOptions}{$Pays}{$endOptions}
                                    {else}
                                        {$initOptions}{$refPays}{$milOptions}{$Pays}{$endOptions}
                                    {/if}
                                {/foreach}
                                {$endList} 

                                <!--Libellés consultation/suppression, cachés en modification-->
                                {$varInitSpanHidden}{$esp}{$varEndSpanHidden} {$varInitSpanHidden}{$sex}{$varEndSpanHidden} {$varInitSpanHidden}{$pays}{$varEndSpanHidden}
                                {$endEspSexPays}
                                <br>
                                <table>
                                    <tr>
                                        <td>
                                            <label for="numParcelle"><strong>Numero de parcelle : </strong></label>
                                            <input type="text" name="parcelle" id="numParcelle" value="{$parcelle}" {$varCRUD}></td>
                                        <td>
                                            <label for="statutAnimal"><strong>Statut actuel : </strong></label>
                                            <!--Select du statut(modification)-->
                                            {$initListStatuts}
                                            {foreach from=$listeStatuts key="refStatut" item="Statut"}
                                                {if $Esp == $esp}
                                                    {$initOptionsSelected}{$refStatut}{$milOptions}{$Statut}{$endOptions}
                                                {else}
                                                    {$initOptions}{$refStatut}{$milOptions}{$Statut}{$endOptions}
                                                {/if}
                                            {/foreach}
                                            {$endList} 
                                            {$varInitSpanHidden}
                                            <input type="text" name="statut" id="statutAnimal" value="{$statutAnimal}" {$varCRUD}>
                                            {$varEndSpanHidden}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="taille"><strong>Taille (cm): </strong></label>
                                            <input type="text" name="taille" id="taille" value="{$taille}" {$varCRUD}>
                                        </td>
                                        <td>
                                            <label for="poids"><strong>Poids (kg): </strong></label>
                                            <input type="text" name="poids" id="poids" value="{$poids}" {$varCRUD}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="dOb"><strong>Né le : </strong></label>
                                            <input type="text" name="dateNaissance" id="dOb" value="{$dOb}" {$varCRUD}>
                                        </td>
                                        <td>
                                            <label for="pOb"><strong>Lieu de Naissance : </strong></label>
                                            <input type="text" name="lieuNaissance" id="pOb" value="{$pOb}" {$varCRUD}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="pere"><strong>Père : </strong></label>
                                            <input type="text" name="pere" id="pere" value="{$pere}" {$varCRUD}>
                                        </td>
                                        <td>
                                            <label for="mere"><strong>Mère : </strong></label>
                                            <input type="text" name="mere" id="mere" value="{$mere}" {$varCRUD}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <br>
                                            <textarea from="formAnimal" name="descriptif" id="desc" {$varCRUD}>{$description}</textarea>
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
        <!--Balises pour pouvoir concaténer les scripts Js-->
        <script>
            {$js}
        </script>
    </body>
</html>