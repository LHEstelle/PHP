<?php 
$mois = array(76 => "seine-maritime" , 77 => "paris",59 => "bolbec","avril","mai","juin","juillet","aout","septembre");
print_r($mois);
foreach ($mois as $i => $value){
    unset($mois[$i]);
}
print_r($mois);
$mois[84]="reims";
print_r($mois);
$mois = array_values($mois);
$mois[] = 85;
print_r($mois);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    <h1>exo3</h1>

</body>
</html>