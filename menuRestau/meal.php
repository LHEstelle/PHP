<?php
$arrayMenu = [
    'risotto',
    'pâtes carbonara',
    'tartiflette',
    'raclette',
    'pizza'
];
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
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title></title>
</head>

<body>
    <?php

    if (isset($_GET['menu'])) {   ?>
        <p class="text-center m-5"> Votre plat <?= $arrayMenu[$_GET['menu']] ?> a bien été pris en compte <br> Nous préparons votre commande </p>
    <?php }
    if ($_GET['menu'] == 0 ) { ?>
        <img src="risotto.jpg">
    <?php }
    ?>




    <p class="text-center m-5"></p>
    <div class="row justify-content-center">
        <a class="btn btn-dark m-2 col-lg-2" href="index.php">Retour</a>
    </div>









</body>

</html>