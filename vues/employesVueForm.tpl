<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <title>Projet2</title>
	</head>
        <body>
        <h2>{$msg}</h2>
        {foreach from=$consultEmploye item=Employe}
        <table>
				{$form}
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : {$Employe.nomEmploye} {$Employe.prenomEmploye}</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        {$action1}
                        <td>{$bouton2}</td>
                        <td colspan='{$valeurcolspan}'>{$bouton1}</td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="8"><img src="img/{$Employe.avatar}" class="avatar"></td>
                            <td>Identifiant de connexion</td>
                            <td><input id="login" name="login" value="{$Employe.login}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Civilité</td>
							<td><input id="idSexe" name="idSexe" value="{$Civilite}" {$parametrereadonly}></td>
                        </tr>
						<tr>
                            <td>Nom</td>
                            <td><input id="nom" name="nom" value="{$Employe.nomEmploye}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Prénom</td>
                            <td><input id="prenom" name="prenom" value="{$Employe.prenomEmploye}"{$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Fonction</td>
                            <td><input id="fonction" name="fonction" value="{$Employe.fonction}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value="{$Employe.motdepasse}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Adresse mail</td>
                            <td><input type="email" id="mail" name="mail" value="{$Employe.adressemail}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Droits de l'utilisateur</td>
							<td><input id="droits" name="droits" value="{$Employe.droits}" {$parametrereadonly}></td>
                        </tr>
                        {$debutlignetab}<input type="hidden" id="idEmploye" name="idEmploye" value="{$Employe.idEmploye}">{$finlignetab}
                    </tbody>
                    </form>
            </table>
             {/foreach}
</html>