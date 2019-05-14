<?php 
// include("connection_post.php");
session_start();
$passmod= md5($_POST['passmod']);
$passmodconf= md5($_POST['passmodconf']);
$pass= md5($_POST['pass']);
$id = $_SESSION["id"];

try{
    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    
    }
    catch (exception $e)
    {
        die('erreur : ' . $e->getMessage());
    }

     
// verifier la presence des variable et si elle ne sont pas vide
if (isset($_POST['pass']) AND isset($_POST['passmod']) AND isset($_POST['passmodconf']))
    {   
        if (!empty($_POST['pass']) AND !empty($_POST['passmod']) AND !empty($_POST['passmodconf']))
        {
            $req = $bdd->prepare('SELECT pass FROM membre WHERE id = :id');
            $req->execute(array(
                'id' => $id));

            $resultat = $req->fetch();
            var_dump($resultat);
            if($resultat["pass"] != $pass){
                 echo 'mots de passe incorrect';
            }
            else{
                if($passmod == $passmodconf){
                    $req = $bdd->prepare('UPDATE membre SET pass = :passmod WHERE id = :id');
                    $req->execute(array(
                        'passmod' => $passmod,
                        'id' => $id
                    ));
                    header('Location: login.php');
                }
            }

                  
                }
            
            }
        
    ?>