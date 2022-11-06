<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task3.php" method="post">
    <label>
        Логін:
        <input type="text" name="login">
    </label><br>
    <label>
        Пароль:
        <input type="text" name="password">
    </label><br>
    <label>
        <input type="submit" value="Відправити" >
    </label>
    <label>
        <input type="submit" value="Вийти" name="Exit">
    </label>
</form>
</body>
</html>

<?php
session_start();

if ($_POST['login']=="Admin" and $_POST["password"]=="password")
    echo "Привіт  Admin";
    elseif ($_POST['login']==(isset( $_SESSION['login'])) and $_POST['password']==(isset($_SESSION['password'] )))
    {
      echo "Привіт ". $_POST['login'];
    }
    else {
        echo "Пароль або логін невірні";
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];

    }
if (isset($_POST['Exit'])) {
    session_destroy();
}



