
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div>
        <h1 class="text-center">Exercice 1</h1>
        <p>User agent : <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
        <p>Adresse ip : <?= $_SERVER['REMOTE_ADDR'] ?></p>
        <p>Nom du serveur : <?= $_SERVER['SERVER_NAME'] ?></p>
        <p>Nom du serveur : <?= $_SERVER['GATEWAY_INTERFACE'] ?></p>

    </div>
</body>

</html>