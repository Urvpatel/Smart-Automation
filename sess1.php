<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "John";
$_SESSION["email"] = "john@example.com";
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Access session variables
echo "Username is " . $_SESSION["username"] . "<br>";
echo "Email is " . $_SESSION["email"] . "<br>";
?>

</body>
</html>
