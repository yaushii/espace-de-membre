<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification</title>
</head>
<body>
    <h1>modification du mot de passe</h1>


    <form action="modifi_post.php" method="post">

    <label for="password">ancien mot de passe</label>
    <input type="password" name="pass" id="passmod"/><br />

    <label for="password">nouveau mot de passe</label>
    <input type="password" name="passmod" id="passmod"/><br />

    <label for="password">confirmation mot de passe</label>
    <input type="password" name="passmodconf" id="passmod"/><br />
    
    <input type="submit" value="submit">
    
    
    </form>
</body>
</html>