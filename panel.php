<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
} else {
    echo 'hello '. $_SESSION['user'];
    echo "<a href='logout.php'> Wyloguj się! </a>";
}

// header("Location: logout.php")
?>