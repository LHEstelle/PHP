<?php
if(!empty($_POST)){
setcookie(
    "login",
    $_POST["login"],
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
    );

setcookie(
    "mdp",
    $_POST["mdp"],
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="index.php">
    <label for="login">Login</label>
    <input type="text" name="login">
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp">
    <button name="submit">Envoyer</button>
  
    <p>Bonjour <?= $_COOKIE['LOGGED_USER']; ?> !</p>
     
</form>

</body>
</html>