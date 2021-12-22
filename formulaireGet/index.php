

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
    <h1>Formulaire</h1>
    <?php
require('controller.php')

?>
    <form method="GET" action="index.php" novalidate>
        
        



        <div class="">
            <label class="col-1 ms-3" for="nom">Nom</label>
            <input value="<?= isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : "" ?>" type="text" placeholder="ex: DOE" id="nom" class="m-3 col-2" name="nom" required><span class="text-danger"><?= $arrayError['nom'] ?? "" ?></span>
        </div>
        <label class="col-1 ms-3" for="prenom">Prénom</label>
        <input value="<?=  isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : "" ?>" type="text" class="m-3 col-2" id="prenom" name="prenom" required><span class="text-danger"><?= $arrayError['prenom'] ?? "" ?></span>
        </div>
        <div class="">
        <label class="col-1 ms-3" for="mail">Mail</label>
        <input value="<?= isset($_GET['mail']) ? htmlspecialchars($_GET['mail']) : "" ?>" type="email" class="m-3 col-2" id="mail" name="mail" required><span class="text-danger"><?= $arrayError['mail'] ?? "" ?></span>
        </div>
        <div class="">
        <label class="col-1 ms-3" for="sujet">Sujet</label>
        <select class="m-3 col-2" name="sujet" id="sujet" required>
            <option value="">--Choisissez un sujet--</option>
            <option value="infos" name="infos" <?= isset($_GET['sujet']) && $_GET['sujet'] == "infos" ? "selected" : "" ?>>infos</option>
            <option value="prix" <?= isset($_GET['sujet']) && $_GET['sujet'] == "prix" ? "selected" : "" ?>>prix</option>
            <option value="autres" <?= isset($_GET['sujet']) && $_GET['sujet'] == "autres" ? "selected" : "" ?>>autres</option>
        </select>
        </div><span class="text-danger"><?= $arrayError['sujet'] ?? "" ?></span>
        <div class="">
        <label for="demande" class="ms-3 mt-3 mb-3">Veuillez décrire votre demande</label>
        </div><span class="text-danger"><?= $arrayError['demande'] ?? "" ?></span>
        <div class="">
        <textarea  class="ms-3 col-3 mb-3" name="demande" required><?= isset($_GET['demande']) ? htmlspecialchars($_GET['demande']) : "" ?></textarea>
        </div>
        <input type="submit" class="btn btn-dark m-5" name="submitbutton">

    </form>
    </div>

</body>

</html>