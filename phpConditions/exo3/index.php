<?php 
$age = 25;
$gender = "homme";
if ($gender == "femme" && $age >= 18) {
    echo "vous êtes une femme et vous êtes majeure";
} else if ($gender == "femme" && $age < 18){
    echo "vous êtes une femme et vous êtes mineure";
}else if ($gender == "homme" && $age < 18){
    echo "vous êtes un homme et vous êtes mineur";
}else if ($gender == "homme" && $age >= 18){
    echo "vous êtes un homme et vous êtes majeur";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <h1>exo3</h1>

</body>
</html>