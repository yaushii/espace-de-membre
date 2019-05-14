<?php  

        //je déclare la variable $cookiePseudo
        $cookiePseudo = $_COOKIE['pseudo'] ;
        ?>
<form method="post" action="deconnexion.php">
   <input type="submit" value="Se déconnecter" />
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>espace perso</title>
</head>
<body>
    <h1>Mon espace perso</h1>
<p>Bonjour, <?php echo $cookiePseudo; ?></p>
<a href="http://localhost/php/login/modifi.php">modifier le mots de passe</a>
    <?php
// connection a la bdd
try{
    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    
    }
    catch (exception $e)
    {
        die('erreur : ' . $e->getMessage());
    }
    ?>
    
</body>
</html>