<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
// Echo session variables that were set can be accessed in other page too
print_r($_SESSION);
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

</body>
</html>