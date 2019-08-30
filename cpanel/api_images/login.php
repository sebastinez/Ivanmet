<?php
// Start session
session_start();

// Username and password
$ID = "comercial@ivanmet.com.ar";
$pass = "5fae9c261494d38a95bfbe6789407cd8a7828f61c82037505dece682baabfb29";

if (isset($_POST["usuario"]) && isset($_POST["password"])) {

    if ($_POST["usuario"] === $ID && hash("sha256", $_POST["password"]) === $pass) {

        $_SESSION["loggedin"] = true;

        header("Location: ../index.php");
        exit;
    }
    // Wrong login - message
    else {
        echo "Bad ID and password, the system could not log you in";
    }
}
