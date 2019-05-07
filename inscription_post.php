<?php 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    
    }
    catch (exception $e)
    {
        die('erreur : ' . $e->getMessage());
    }
// criptage du mots de passe

$hashed_password = crypt($_POST['pass']);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO membre (pseudo, pass, email, date_creation) VALUES(:pseudo, :pass, :email, NOW())');
$req->execute(array(
    ':pseudo' =>$_POST['pseudo'], 
    ':pass' => $hashed_password, 
    ':email' => $_POST['email']));

// Redirection du visiteur vers la page du minichat
header('Location: connection.php');
?>