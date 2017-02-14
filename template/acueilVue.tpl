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
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="produit">
                <input type="submit" name="produit" value="articles">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="clients">
                <input type="submit" name="clients" value="clients">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="vendeur">
                <input type="submit" name="vendeur" value="vendeur">
            </form>
        </nav>
        <h2>{$msg}</h2>
    </body>
</html>