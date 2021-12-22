<?php 
$arrayError =[];    
        
        if (isset($_GET['prenom']) && empty($_GET['prenom']) && isset($_GET['submitbutton'])) {
            $arrayError["prenom"] = "Veuillez indiquer votre prénom ";
        }if (isset($_GET['submitbutton']) && !empty($_GET['prenom']) && !preg_match("#^([a-z]+(( |')[a-z]+)*)+([-]([a-z]+(( |')[a-z]+)*)+)*$#iu", $_GET['prenom'])) { 
            $arrayError["prenom"] = "Prénom invalide";
        }if (isset($_GET['nom']) && empty($_GET['nom']) && isset($_GET['submitbutton'])) { 
            $arrayError["nom"] = "Veuillez indiquer votre nom ";
        }if (isset($_GET['submitbutton']) && !empty($_GET['nom']) && !preg_match("#^([a-z]+(( |')[a-z]+)*)+([-]([a-z]+(( |')[a-z]+)*)+)*$#iu", $_GET['nom'])) { 
            $arrayError["nom"] = "Nom invalide";
        }if (isset($_GET['mail']) && empty($_GET['mail']) && isset($_GET['submitbutton'])) { 
            $arrayError["mail"] = "Veuillez indiquer votre mail ";
        }if (isset($_GET['submitbutton']) && !empty($_GET['mail']) && !filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) { 
            $arrayError["mail"] = "Mail invalide";
        }if ( isset($_GET['sujet']) && empty($_GET['sujet']) && isset($_GET['submitbutton'])) { 
            $arrayError["sujet"] = "Veuillez indiquer votre sujet ";
        }if (isset($_GET['demande']) && empty($_GET['demande']) && isset($_GET['submitbutton'])) { 
            $arrayError["demande"] = "Veuillez indiquer votre demande ";
        }if(!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['mail']) && !empty($_GET['sujet']) && !empty($_GET['demande'])){
           
            header('Location: infos.php?nom=' . htmlspecialchars($_GET['nom']).'&prenom=' . htmlspecialchars($_GET['prenom']). '&mail='.htmlspecialchars($_GET['mail']). '&sujet='. htmlspecialchars($_GET['sujet']). '&demande=' . htmlspecialchars($_GET['demande']) . '&submitbutton=Soumettre');
    } ?>