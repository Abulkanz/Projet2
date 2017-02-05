<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Projet2</title>
</head>

<body>
    <header>
        <!--<div><img class="logo" src="img/logoSinges.png"></div>-->
    </header>
    <mean>
        <h1>Liste des base de données</h1>
        <br>
        <table class="table table-hover">
        <thead>
            <tr>
            <th></th>
            <th>Non</th>
            <th>Nombre de table</th>
            <th>Commentaire</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"><img class="miniature" src="img/databaseslogo.png"></th>
            <td>bddanimaux</td>
            <td>4</td>
            <td>Sert a la gestion des animaux</td>
            </tr>
            <tr>
            <th scope="row"><img class="miniature" src="img/databaseslogo.png"></th>
            <td>bddpersonnel</td>
            <td>10</td>
            <td>Sert à la gestion du personnelle du zoo</td>
            </tr>
            <tr>
            <th scope="row"><img class="miniature" src="img/databaseslogo.png"></th>
            <td>bddcommercial</td>
            <td>12</td>
            <td>Sert a la gestionn financiere(billeterie, achat de fourniture, ...)</td>
            </tr>
        </tbody>
        </table>
        <br>
        <br>
        <hr>
         <?php
            require_once 'include/infoconnexion.php';
            require_once 'include/connexion.php';
            require_once 'include/executeRequete.php';
            $cnx=connexion(UTILISATEUR,MOTDEPASSE,SERVER,BASEDEDONNEES);
            $varSql = "SELECT idEmploye, avatar, nom, prenom, fonction FROM employes";
            $idRequete = executeRequete($cnx,$varSql);
            echo '<h1>Liste des utilisateurs</h1>';
                echo '<br>';
                echo '<table class="table table-hover">';
                echo '<thead>';
                echo '<tr>';
                echo '<th></th>';
                echo '<th>Non</th>';
                echo '<th>Prenom</th>';
                echo '<th>Fonction</th>';
                echo '<th colspan="4">Action</th>';
                echo '</tr>';
                echo ' </thead>';
                echo '<tbody>';
            while($ligne=$idRequete->fetch()){
                echo ' <tr>';
                echo '<td>'. '<img src="img/'.$ligne['avatar'].'" class="miniature"/>'.'</td>';
                echo '<td>'.$ligne['nom'].'</td>';
                echo '<td>'.$ligne['prenom'].'</td>';
                echo '<td>'.$ligne['fonction'].'</td>';
                echo '<td>'.'<form method="post" action="consultation.php">'.'<input type="hidden" name="identifiant" value="'.$ligne['idEmploye'].'"'.'>'.'<input type="submit" value="C" />'.'</form>'.'</td>';
                echo '<td>'.'<form method="post" action="modification.php">'.'<input type="hidden" name="identifiant" value="'.$ligne['idEmploye'].'"'.'>'.'<input type="submit" value="M" />'.'</form>'.'</td>';
                echo '<td>'.'<form method="post" action="suppression.php">'.'<input type="hidden" name="identifiant" value="'.$ligne['idEmploye'].'"'.'>'.'<input type="submit" value="S" />'.'</form>'.'</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
                ?>
        <form method="post" action="ajoututilisateur.php">
                <p>
                    <label>Ajout d'un utilisateur</label>
                    <input type="submit" value="Envoyer" />
                </p>
       </form>
       <form method="post" action="ajoutanimaux.php">
                <p>
                    <label>Ajouter d'un animal</label>
                    <input type="submit" value="Envoyer" />
                </p>
       </form>
    </mean>
</body>

</html>