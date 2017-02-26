<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <nav>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="accueil">
                <input type="submit" name="accueil" value="accueil">
            </form>
            {$employes}
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="animaux">
                <input type="submit" name="animaux" value="animaux">
            </form>
            <form method="POST" name="gestion">
                <input type="hidden" name="gestion" value="carte">
                <input class="lienNav" type="submit" name="carte" value="Carte">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="statistique">
                <input type="submit" name="statistique" value="statistique">
            </form>
            {$login}
            <ul>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="profil">
                        <input type="hidden" name="identifiant" value="{$login}">
                        <input type="hidden" name="action" value="profil">
                        <input type="submit" name="profil" value="Profil">
                    </form>
                </li>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="aide">
                        <input type="submit" name="aide" value="aide">
                    </form>
                </li>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="Deconnexion">
                        <input type="submit" name="Deconnexion" value="Deconnexion">
                    </form>
                </li>
            </ul>
        </nav>
        <mean>
            <h2>{$msg}</h2>
            <br>
            <h1>Sommaire</h1>
            <br>
            <h2>Ajout d'un utilisateur ou d'un animal</h2>
            <h2>Consultation des informations d'un utilisateur ou d'un animal</h2>
            <h2>Modification des informations d'un utilisateur ou d'un animal</h2>
            <h2>Modification de la photo d'un utilisateur ou d'un animal</h2>
            <h2>Suppression des informations d'un utilisateur ou d'un animal</h2>
            <br>
            <h3>Ajout d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour ajouter un utilisateur ou un animal, il faut cliquer sur le bouton "Ajouter" (comme ci-dessous) en bas de la liste des employés ou des annimaux pour accéder au formulaire prévu</p>
            <img src="img/ajout.png">
            <br>
            <p>Une fois arrivé sur la page contenant le formulaire, il faut compléter les différents champs du formulaire et choisir l'image qui sera affichée dans liste comme dans l'exemple (employés)</p>
            <br>
            <img src="img/formajout.png">
            <br>
            <h3>Consulation des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour consulter les informations d'un utilisateur ou d'un animal, il faut cliquer sur le bouton "Consulter" (comme ci-dessous) dans la liste des employés ou des animaux</p>
            <img src="img/consulter.png">
            <br>
            <p>Le formulaire est alors affiché.</p>
            <br>
            <img src="img/formconsult.png">
            <h3>Modification des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour modifier les informations d'un utilisateur ou d'un animal, il faut cliquer sur le bouton "Modifier" (comme ci-dessous) dans la liste des employés ou des animaux</p>
            <br>
            <img src="img/modifier.png">
            <p>Le formulaire est alors afficher. Pour modifier les informations, il suffit de compléter le champ du formulaire qui contient l'information que vous souhaitez modifiée.</p>
            <br>
            <img src="img/formmodifier.png">
            <h3>Modification de la photo d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour modifier la photo d'un animal, il faut accéder au formulaire de modification (section précédente).</p>
            <P>Une fois le formulaire chargé, il faut cliquer sur "parcourir" et cliquer sur "Modifier" pour appliquer la modification</p>
            <br>
            <h3>Suppression des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour supprimer un utilisateur ou un animal, il faut cliquer sur le bouton "Supprimer" dans la liste des employés ou des animaux</p>
            <p>Un formulaire sera alors affiché, il récapitulera les informations qui seront supprimées. Pour valider la suppression, il faut cliqur sur le bouton "Supprimer".</p>
        </mean>
    </body>
</html>