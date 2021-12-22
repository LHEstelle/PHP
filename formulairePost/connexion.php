<?php
require "icontroller.php";
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

    <title>Connexion</title>
</head>

<body>
    <!-- prenom -->
    <form action="" method="POST" novalidate>
        <div class="row justify-content-center mt-5">
            <div class="m-1 col-lg-4 bg-dark p-5 text-white text-center">
                <h1 class="mb-5">Connexion</h1>
                <label for="pseudo"> Mail/pseudo :</label><span class="text-danger">
                    <?= $arrayErrors["prenom"] ?? "" ?>
                </span>
                <div>
                    <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" type="text" id="pseudo" name="pseudo" required>
                </div>

                <!-- pseudo -->
                <div class="">

                    <label for="mdp"> Mot de passe :</label><span class="text-danger">
                        <?= $arrayErrors["mdp"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["mdp"]) ? htmlspecialchars($_POST["mdp"]) : "" ?>" type="text" id="mdp" name="mdp" required>
                    </div>
                </div>
                <span class="text-danger">
                    <?= $arrayError["error"] ?? "" ?>
                </span>
                <input type="submit" value="inscription" name="inscription" class="btn btn-secondary mt-5">
            </div>
        </div>
    </form>
</body>

</html>