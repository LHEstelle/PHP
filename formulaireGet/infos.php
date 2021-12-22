<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--ICI CDN BOOTSRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <title></title>
</head>

<body>
  

    
        <p>Votre demande a bien été prise en compte.</p>
        <p class="text-center m-5"> Votre nom: <?= $_GET['nom'] ?> </p>
        <p class="text-center m-5"> Votre prenom: <?= $_GET['prenom'] ?> </p>
        <p class="text-center m-5"> Votre mail: <?= $_GET['mail'] ?> </p>
        <p class="text-center m-5">Sujet: <?= $_GET['sujet'] ?> </p>
        <p class="text-center m-5">Demande: <?= $_GET['demande'] ?> </p>
 

</body>

</html>