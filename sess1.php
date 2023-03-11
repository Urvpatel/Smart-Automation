<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "xyz";
$_SESSION["password"] = "123";
?>`

<!DOCTYPE html>
<html>
<body>

<?php
// Access session variables
echo "Username is " . $_SESSION["username"] . "<br>";
echo "Password is " . $_SESSION["password"] . "<br>";
?>

</body>
</html>
