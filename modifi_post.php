<?php 
$passmod=$_POST['passmod'];
$passmodconf=$_POST['passmodconf'];
$pass=$_POST['pass'];

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
            if($pass == crypt(($_POST['pass']), $salt))
        }
                else{
                    
                        $req = $bdd->prepare('UPDATE pass SET pass = :passmod ');
                        $req->execute(array(
	                                    'pass' => $passmod
	                                    ));

                }
            }
        
    ?>