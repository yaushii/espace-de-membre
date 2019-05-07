<?php 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    
    }
    catch (exception $e)
    {
        die('erreur : ' . $e->getMessage());
    }
// verifie la presence de la variable speudo et pass
    if (isset($_POST['pseudo']) AND isset($_POST['pass']))
    {// si les variable sont vide.
        if (!empty($_POST['pseudo']) AND !empty($_POST['pass']))
        {
            $pseudo = $_POST['pseudo'];

        // on SELECTION dans la base de donnée l'ID pass dans la table membre ou(WHERE) le pseudo et egale au pseudo.
            $req = $bdd->prepare('SELECT id, pass FROM membre WHERE pseudo = :pseudo');
            // parcour  le tableau pseudo
            $req->execute(array(
                'pseudo' => $pseudo));

                // variable $resultat stocke le resultat de la  requete avec le fetch
            $resultat = $req->fetch();

            // SI la variable $resultat = au mdp ecrit dans le champs input et k'il est bon se connecter.
            if ($resultat['pass'] != $_POST['pass'])
            {
                // sinon  mdp error.
                echo 'Identifiant ou Mot De Passe incorrect.<br/>';
                // var_dump($_POST['pass']);
            }
            else
            {
                session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
        header('Location: login.php');
            }
            $req->closeCursor();
        }
        else
        {
            echo 'Renseignez un Pseudo/Derbyname et un Mot De Passe.<br/><a href="http://localhost/php/login/connection.php">retour</a>';
        }
    }
?>
