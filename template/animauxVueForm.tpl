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
        {foreach from=$consultAnimaux item=Animaux}
        <table>
				{$form}
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : {$Animaux.prenomAnimal}</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="animaux">
                        {$action1}
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3">{$bouton1}</td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="9"><img src="img/imgFiches/{$Animaux.photo}" class="avatar"></td>
                            <td>Prenom de l'animal</td>
                            <td><input type="text" id="prenomAnimal" name="prenomAnimal" value="{$Animaux.prenomAnimal}" {$parametrereadonly}></td>
                        </tr>
						<tr>
                            <td>Poids de l'animal</td>
                            <td><input type="text" id="poids" name="poids" value="{$Animaux.poids}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Taille de l'animal</td>
                            <td><input type="text" id="taille" name="taille" value="{$Animaux.taille}"{$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Statut de l'animal</td>
                            <td><input type="text" id="statut" name="statut" value="{$Animaux.statut}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>date_naissance</td>
                            <td><input type="text" id="date_naissance" name="date_naissance" value="{$Animaux.date_naissance}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>lieu de naissance</td>
                            <td><input type="text" id="lieu_naissance" name="lieu_naissance" value="{$Animaux.lieu_naissance}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><input type="text" id="idSexe" name="idSexe" value="{$genre}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Lieu de vie</td>
							<td><input type="text" id="nomParcelle" name="nomParcelle" value="{$Animaux.nomParcelle}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea rows="4" cols="50" id="description" name="description" {$parametrereadonly}>{$Animaux.description}</textarea></td>
                        </tr>
                        {$debutlignetab}<input type="hidden" id="idAnimaux" name="idAnimaux" value="{$Animaux.idAnimaux}">{$finlignetab}
                    </tbody>
                    </form>
            </table>
             {/foreach}
             <script>
             function confirmation(form) {
                 // validation code here ...
                 if(!valid) {
                     alert('Please correct the errors in the form!');
                     return false;
                else {
                    return confirm('Do you really want to submit the form?');
                    }
                 }
            </script>
    </body>
</html>