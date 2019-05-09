<?php  
setcookie('pseudo', $_POST['pseudo'], time() + 24*3600, null, null, false, true);

        //je déclare la variable $cookiePseudo
        $cookiePseudo = $_COOKIE['pseudo'] ;
        

// connection a la bdd
try{
    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    
    }
    catch (exception $e)
    {
        die('erreur : ' . $e->getMessage());
    }
    

    $reponse = $bdd->query('SELECT pseudo FROM membre');

// affichage des 10 derniers messages, les données sont proteger par htmlspecialchars.

while ($donnees = $reponse->fetch())
{
    echo '<div class="chat"><p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong></p></div>';
}
$reponse->closeCursor();

?>
