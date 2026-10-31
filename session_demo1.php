<?php
// strat a seesion
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
  // set session variable
$_SESSION["myuniversity"] = "Rutgers";
$_SESSION["status"] = "Junior";
echo "Session variables are set.";
?>

</body>
</html
