<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>{$msg}</h2>
        {foreach from=$consultEmploye item=Employe}
        <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="envoyermail">
                Designation :<input type="text" name="designation" value="{$Employe.idSexe}" required><br>
                Prix unitaire :<input type="text" name="prixunitaireht" value="{$Employe.nom}"><br>
                Descriptif : :<input type="text" name="droits" value="{$Employe.droits}"><br>
                Stock : <input type="text" id="stock" name="stock" value="{$Employe.prenom}"><br>
                Quantité : <input type="text" name="quantite" value="{$Employe.fonction}"><br>
                Poids Piece: <input type="text" name="poidspiece" value="{$Employe.adressemail}"><br>
                <input type="submit" name="envoyermail" value="Envoyer la fiche par mail" />
                <input type="submit" name="valider" value="Retour" />
        </form> 
        {/foreach}
    </body>
</html>