<?php 
$login='$2a$12$3OxUxOeOomhdCAzqd1r9neU0BXUwwNhmLhJnzF.OsJ7lxsjulQH6i';
$password='$2a$12$3OxUxOeOomhdCAzqd1r9neU0BXUwwNhmLhJnzF.OsJ7lxsjulQH6i';
var_dump($_POST);
if(!empty($_POST)){
    if(empty($_POST['pseudo']) || empty($_POST['mdp'])){
$arrayError['error']="veuillez saisir votre pseudo et/ou mot de passe";
    }else if(!password_verify ($_POST['mdp'], $login) && !password_verify ($_POST['mdp'], $password)){
$arrayError['error']= "Mot de passe ou pseudo invalide";
    } else{
header("Location: welcome.php");
exit;
    }
}
?>