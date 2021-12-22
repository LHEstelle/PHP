<?php
require "controller.php";
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

    <title>Formulaire</title>
</head>

<body>

<?php if (!empty($_POST) && empty($arrayErrors)){ ?>
    <p>Inscription ok , veuillez vous connectez</p>
    <a class="btn btn-outline-primary" href="connexion.php">Connexion</a>
    <?php } else {?>
    <div class="row">
        <div class=" col-lg-8 mt-5 ms-5">
            <h1 class="">Contact</h1>
            <form class="mt-3"  action="index.php" method="POST" novalidate>
                <!-- nom -->
                <div class="m-1">
                    <label for="nom"> Nom :</label><span class="text-danger">
                        <!-- je verifie la clef nom dans mon tableau arrayErrors si oui je l'affiche -->
                        <?= $arrayErrors["nom"] ?? "" ?>
                    </span>
                    <div>
                        <!-- "><script>alert("boom")</script><img class=" -->
                        <!-- je test si input nom est present dans $_POST si oui je l'affiche en utilisant htmlspecialchars sinon je n'affiche rien -->
                        <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" type="text" id="nom" name="nom" required>
                    </div>
                </div>

                <!-- prenom -->
                <div class="m-1">
                    <label for="prenom"> prenom :</label><span class="text-danger">
                        <?= $arrayErrors["prenom"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" type="text" id="prenom" name="prenom" required>
                    </div>
                </div>
                <!-- pseudo -->
                <div class="m-1">
                    <label for="pseudo"> pseudo :</label><span class="text-danger">
                        <?= $arrayErrors["pseudo"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" type="text" id="pseudo" name="pseudo" required>
                    </div>
                </div>

                <!-- mdp-->
                <div class="m-1">
                    <label for="mdp"> Mot de passe :</label><span class="text-danger">
                        <?= $arrayErrors["mdp"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["mdp"]) ? htmlspecialchars($_POST["mdp"]) : "" ?>" type="password" id="mdp" name="mdp" required />
                    </div>
                </div>

                <!-- mdpverif -->
                <div class="m-1">
                    <label for="mdpverif"> Confirmation mot de passe :</label><span class="text-danger">
                        <?= $arrayErrors["mdpverif"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["mdpverif"]) ? htmlspecialchars($_POST["mdpverif"]) : "" ?>" type="password" id="mdpverif" name="mdpverif" required />
                    </div>
                </div>

                <!-- url -->
                <div class="m-1">
                    <label for="url"> URL </label><span class="text-danger">
                        <?= $arrayErrors["url"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["url"]) ? htmlspecialchars($_POST["url"]) : "" ?>" type="text" id="url" name="url" required />
                    </div>
                </div>
                <span class="text-danger">
                        <?= $arrayErrors["cgu"] ?? "" ?>
                    </span>
                <!-- accepter cgu -->
                <div class="m-1">
                    <input type="checkbox" id="cgu" name="cgu" required>
                    <label for="cgu">Accepter les CGU</label>
                   
                </div>


                <input type="submit" value="inscription" name="submit" class="btn btn-outline-secondary ">
            </form>
        </div>
    </div>
    <?php } ?>
</body>

</html>