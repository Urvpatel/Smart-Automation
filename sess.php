<?php
session_start(); // start the session

if (isset($_SESSION['username'])) { // check if the user is already logged in
    echo "Welcome back, " . $_SESSION['username'] . "!";
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) { // check if the user submitted a login form
        $username = $_POST['username'];
        $password = $_POST['password'];
        // validate the username and password here
        if ($usernmae="Urv" && $password="Urv") {
            $_SESSION['username'] = $username; // set the session variable
            echo "Welcome, " . $_SESSION['username'] . "!";
        } else {
            echo "Invalid username or password.";
        }
    } else { // display the login form
        echo '<form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br>
                <input type="submit" value="Log In">
            </form>';
    }
}
?>
