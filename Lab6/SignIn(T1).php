<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td, th {
            border: 1px solid black;
        }

        table {
            background: lightyellow;
        }

        p {
            color: greenyellow;
            font-size: 20px;
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

</body>
</html>
<?php
try {
    $login = $_POST['login'];
    $password = $_POST['password'];
    require('Config.php');
    $user = $pdo->query("SELECT * from users WHERE login=\"$login\"");
    session_start();
    function getTable($pdo)
    {
        echo '<p>Вхід успішно виконано</p>';
        $login = $_POST['login'];
        $user = $pdo->query("SELECT * from users WHERE login=\"$login\"");
        echo '<table>
                    <tr>
                        <th>ID</th>
                        <th>Ім\'я</th>
                        <th>Прізвище</th>
                        <th>По батькові</th>
                        <th>Дата Народження</th>
                        <th>Пошта</th>
                        <th>Логін</th>
                        <th>Пароль</th>
                        <th>Стать</th>
                        <th>Країна</th>
                        <th>Місто</th>
                    </tr>
                    <tr>';
        while ($res = $user->fetch(PDO::FETCH_BOTH)) {
            for ($i = 0; $i < count($res) / 2; $i++) {
                echo '<td onclick="this.innerHTML=prompt();">' . $res[$i] . '</td>';

            }
        }
        echo '</tr></table><br>';
        echo '<button><a  href="updateForm.php?login=' . $login . '">Редагувати</a></button><br>';
        echo '<br><button  type="submit"><a  href="deleteForm.php?login=' . $login . '"> Видалити акаунт</a></button ></form><br><br>
             <button onclick="document.location.href=\'SignIn.php\';alert(\'Ви вийшли з свого акаунта\')" >Вийти з акаунту</button>';
    }

    if ($login != '' || $password != '') {
        if (isset($_SESSION['login']) && $login == $_SESSION['login'] && isset($_SESSION['password']) && $password == $_SESSION['password']) {
            getTable($pdo);
        } else {
            $c = 0;
            while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
                if ($res['login'] == $login && $res['password'] == $password) {
                    $c++;
                }
            }
            if ($c == 1) {
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                getTable($pdo);
            } else {
                echo '<script>
            document.location.href=\'SignIn.php\';
             alert("Не правильний пароль або логін");
            </script>';
                exit();
            }
        }
    } else {
        echo '<script>
            document.location.href=\'SignIn.php\';
            alert("Помилка при вводі даних");
            </script>';
        exit();
    }

} catch (PDOException $exception) {
    echo 'Problem :' . $exception->getMessage();
}
?>

