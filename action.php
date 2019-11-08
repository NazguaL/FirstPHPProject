<?php
/*    session_start();
    $_SESSION["name"] = $_GET["name"];
    $_SESSION["email"] = $_GET["email"];*/

    setcookie("name", $_GET["name"], time() + 3600);
    setcookie("email", $_GET["email"], time() + 3600);
    header("Location: index.php");

?>