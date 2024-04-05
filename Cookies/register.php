<?php
    if(!isset($_COOKIE["data"]) && !isset($_POST['username'])){
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="register.php">
        <input type="text" name="username" placeholder="Imię i nazwisko">
        <input type="submit" value="Wyślij">
    </form>
    <?php
        }else{
            if(isset($_POST['username'])){
                setcookie("data", $_POST['username'], time() + 60 * 60 * 24 * 365);
                echo "Dziękujemy za wprowadzenie danych";
            }else{
                echo "Witaj po raz kolejny!" . $_COOKIE["data"];
            }
        }
    ?>
</body>
</html>