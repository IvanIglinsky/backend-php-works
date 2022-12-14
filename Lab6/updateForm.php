<?php
    require_once('Config.php');
    $login = $_GET['login'];
    $user = $pdo->query("SELECT * from users WHERE login=\"$login\"");
    $res = $user->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input{
            width: 100px;
        }
        button {
            background: grey;
            border: 2px solid black;
            width: 200px;
            height: 30px;
            font-size: 18px;
            font-weight: bold;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>По батькові</th>
            <th>Дата Народження</th>
            <th>Пошта</th>
            </tr>
        <tr>
            <td><input type="text" name="idNew" value="<?php echo $res['id']; ?>"></td>
            <td><input type="text" name="NameNew" value="<?php echo $res['Name']; ?>"></td>
            <td><input type="text" name="SurnameNew" value="<?php echo $res['Surname']; ?>" ></td>
            <td><input type="text" name="FNameNew" value="<?php echo $res['Fname']; ?>"></td>
            <td><input type="date" name="DateBirthdayNew" value="<?php echo $res['DateBirthday']; ?>"></td>
            <td><input type="email" name="emailNew" value="<?php echo $res['email']; ?>" ></td>
        </tr>
        <tr>
            <th>Логін</th>
            <th>Пароль</th>
            <th>Стать</th>
            <th>Країна</th>
            <th>Місто</th>
        </tr>
        <tr>
            <td><input type="text" name="loginNew" value="<?php echo $res['login']; ?>" ></td>
            <td><input type="text" name="passwordNew" value="<?php echo $res['password']; ?>"></td>
            <td><input type="text" name="StatNew" value="<?php echo $res['Stat']; ?>" ></td>
            <td><input type="text" name="CountryNew" value="<?php echo $res['Country']; ?>"></td>
            <td><input type="text" name="CityNew" value="<?php echo $res['City']; ?>" ></td>
        </tr>
    </table>
    <br><button type="submit">Надіслати</button></form><br>
</body>
</html>
<?php
    if (isset($_POST['idNew'])) {
        $sql = "UPDATE users SET id=? WHERE login=?";
        $pdo->prepare($sql)->execute([intval($_POST['idNew']),$login]);
        header("Location:updateForm.php?login=$login ");
    }
    if(isset($_POST['NameNew']))
    {
        $sql = "UPDATE users SET Name=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['NameNew'],$login]);
    }
    if(isset($_POST['SurnameNew'])){
        $sql = "UPDATE users SET Surname=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['SurnameNew'],$login]);
    }
    if(isset($_POST['FNameNew'])){
        $sql = "UPDATE users SET Fname=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['FNameNew'],$login]);
    }
    if(isset($_POST['DateBirthdayNew'])){
        $sql = "UPDATE users SET DateBirthday=? WHERE login=?";
        $pdo->prepare($sql)->execute([date($_POST['DateBirthdayNew']),$login]);
    }
    if(isset($_POST['emailNew'])){
        $sql = "UPDATE users SET email=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['emailNew'],$login]);
    }
    if(isset($_POST['passwordNew'])){
        $sql = "UPDATE users SET password=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['passwordNew'],$login]);
    }
    if(isset($_POST['StatNew'])){
        $sql = "UPDATE users SET Stat=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['StatNew'],$login]);
    }
    if(isset($_POST['CountryNew'])){
        $sql = "UPDATE users SET Country=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['CountryNew'],$login]);
    }
    if(isset($_POST['CityNew'])){
        $sql = "UPDATE users SET City=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['CityNew'],$login]);
    }
    if(isset($_POST['loginNew'])){
        $sql = "UPDATE users SET login=? WHERE login=?";
        $pdo->prepare($sql)->execute([$_POST['loginNew'],$login]);
    }
    echo '<button><a href="SignIn.php">Назад</a></button> ';
