<?php
require_once 'controller/controller_index.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Les bons plans de guigui</title>
</head>

<body class="fond">
    <h1 class="text-center">Les bons plans de guigui</h1>
    <?php foreach ($arrayEstelle as $event){ 
        

        ?>
    <div class="container d-flex justify-content-center">
    <div class="shadow-lg p-3 mb-5 bg-body rounded card">
        <div class="row">

            <div class="img col-lg-6">
                <img src="<?= $event["picture"]?>">
            </div>

            <div class="col-lg-6 text-center mt-3">
                <h2 class=""><?= $event["name"]?></h2>
                <p class="mt-3"><?= $event["startDate"]?></p>
                <p class="mt-3"><?= $event["endDate"] ?></p>

                <p class="align-self-end mt-3"><?= $event["price"]?></p>
                <div class="justify-content-center bottom-0 m-5">
<a class="btn btn-dark" type="button" href="views/details.php?id=<?= $event["id"]?>">+d'infos</a></div>
            </div>
        </div>
    </div>
    </div>
<?php } ?>
</body>

</html>