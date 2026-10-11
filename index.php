<?php
session_start();

if (isset($_POST["log"]) && $_POST["pass"]) {
    if ($_POST["log"] == 'admin' && $_POST["pass"] == 'tajne123') {
        $_SESSION['user'] = 'admin';
        header("Location: panel.php");
        exit;
    } else {
        die("Błąd!"); 
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="password" name="pass">
        <input type="login" name="log">
        <button>
            sdff
        </button>
    </form>
</body>

</html>