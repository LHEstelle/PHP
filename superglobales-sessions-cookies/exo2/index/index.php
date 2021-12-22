<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["firstname"] = "JEAN";
$_SESSION["lastname"] = "PEUXPLUS";
$_SESSION["age"] = "14432 ans";

echo '<br /><a href="index2.php" >page 2</a>'
?>
</html>
</body>
