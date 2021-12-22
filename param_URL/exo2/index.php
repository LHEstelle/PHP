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
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title></title>
</head>

<body>

    <p>
    <div class="row justify-content-center">
        <a class="col-lg-2 btn btn-primary m-2" href="index.php?lastname=PARKER&firstname=Parker

">Envoi des paramètres</a>
        <a class="col-lg-1 btn btn-secondary m-2" href="index.php">Retour INDEX</a>
        </p>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {

            if (isset($_GET['age'])) {
                echo $_GET['age'];
            } else {
                echo "le paramètre age n'est pas présent";
            }
        }
        ?>
    </div>
</body>

</html>