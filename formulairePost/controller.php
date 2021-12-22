<?php



$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,25}$/u";

// Tableau vide qui va nous permettre de stocker les erreurs 
$arrayErrors = [];


var_dump($_POST);

// nous verifions si input submit est présent dans $_GET
if (isset($_POST["submit"])) {

    // nous verifions si input nom est présent dans $_GET
    if (isset($_POST["nom"])) {

        // a l'aide de la fonction empty je verifie que l'input nom n'est pas vide 
        if (empty($_POST["nom"])) {

            // je crée une clef nom dans tableau d'erreur avec un message 
            $arrayErrors["nom"] = "Veuillez indiquer votre nom";

            // je verifie a l'aide de la fonction !preg_match() si l'input ne correspond pas
        } elseif (!preg_match($regexName, $_POST["nom"])) {

            // je crée une clef nom dans tableau d'erreur avec un message
            $arrayErrors["nom"] = "Format invalide";
        }
    }

    if (isset($_POST["prenom"])) {
        if (empty($_POST["prenom"])) {
            $arrayErrors["prenom"] = "Veuillez indiquer votre prenom";
        } elseif (!preg_match($regexName, $_POST["prenom"])) {
            $arrayErrors["prenom"] = "Format invalide";
        }
    }

    if (isset($_POST["pseudo"])) {
        if (empty($_POST["pseudo"])) {
            $arrayErrors["pseudo"] = "Veuillez indiquer votre pseudo";
        } elseif (!preg_match($regexName, $_POST["pseudo"])) {
            $arrayErrors["pseudo"] = "Format invalide";
        }
    }


    if (isset($_POST["mdp"]) && isset($_POST["mdpverif"])) {
        if (empty($_POST["mdp"])) {
            $arrayErrors["mdp"] = "Veuillez indiquer votre mot de passe";
        } else if ($_POST["mdp"] != $_POST["mdpverif"]) {
            $arrayErrors["mdpverif"] = "Les mots de passe ne sont pas identiques";
        }
    }
    if (isset($_POST["url"])) {
        if (empty($_POST["url"])) {
            $arrayErrors["url"] = "Veuillez indiquer une URL";
        } else if (!filter_var($_POST["url"], FILTER_VALIDATE_URL)){
            $arrayErrors["url"] = "Format invalide";
        }
    
    }

    if (!isset($_POST["cgu"])) {

            $arrayErrors["cgu"] = "Veuillez accepter les CGU";
        }
    
    }

?>
