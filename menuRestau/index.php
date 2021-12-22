<?php
// var_dump($_GET);
// if(isset($_GET['lastname']) && isset($_GET['firstname'])){
//     echo $_GET['lastname'].' ';
//     echo $_GET['firstname'];
// }
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

<h1 class="text-center m-4 text-white">LA MANU RESTAU</h1>
<h2 class="text-center m-5">Choisissez votre menu</h2>
<div class="choix row justify-content-center">
        <a class="btn btn-dark m-2 col-lg-7" href="meal.php?menu=0">Risotto</a>
        <a class="btn btn-dark m-2 col-lg-7" href="meal.php?menu=1">Pâtes carbonara</a>
        <a class="btn btn-dark m-2 col-lg-7" href="meal.php?menu=2">Tartiflette</a>
        <a class="btn btn-dark m-2 col-lg-7" href="meal.php?menu=3">Raclette</a>
        <a class="btn btn-dark m-2 col-lg-7" href="meal.php?menu=4">Pizza</a>
</div>
    
</body>

</html>