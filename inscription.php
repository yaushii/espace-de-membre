<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<a href="http://localhost/php/login/connection.php">Connexion</a>

<h1>Espace inscription</h1>


<form action="inscription_post.php" method="post">

<p>
<label for="login">login</label>
<input type="text" name="pseudo" id="pseudo"/><br />

<label for="password">password</label>
<input type="password" name="pass" id="pass"/><br />

<label for="email">E-mail</label>
<input type="text" name="email" id="email"/><br />

<input type="submit" value="envoyer"/>

</p>
</form>
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