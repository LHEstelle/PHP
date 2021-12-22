<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Mon prénom est - "  . $_SESSION["firstname"] . " - .<br>";
echo "Mon nom est - " . $_SESSION["lastname"] . " - .<br>";
echo "J'ai - " . $_SESSION["age"] . " - .";
?>
</html>
</body>