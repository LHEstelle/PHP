<?php 
$number = 5;

if($number % 5 == 0 && $number % 3 == 0){
    echo "FizzBuzz";
} else if ($number % 3 == 0){
    echo "Fizz";
}else if ($number % 5 == 0){
    echo "Buzz";
} else {
    echo $number;
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