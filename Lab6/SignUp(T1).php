<?php
require 'Config.php';
$email=$_POST['email'];
$login=$_POST['login'];
$password=$_POST['password'];
$passwordTwo=$_POST['passwordTwo'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$fname=$_POST['fname'];
$stat=$_POST['stat'];
$dateBirth=$_POST['dateBirt'];
$country=$_POST['Country'];
$city=$_POST['city'];

while ($row=$query->fetch(PDO::FETCH_ASSOC)){
    if($row['email']==$email){
      echo  'Користувач уже зареєстрований.Вас автоматично буде перенаправлено до реєстрації.';
      echo '<script type="text/javascript">
                  setTimeout(\'location.href="SignIn.php"\', 3000);
                  </script>';
      break;
    }
    else{
        if($password==$passwordTwo  && $email!='' && $stat!='' && $password!=''&& $name!=''&& $surname!='' && $fname!=''  && $dateBirth!='' && $country!='' && $city!=''  ){
            $pdo->query("INSERT INTO `users` (`id`, `Name`, `Surname`, `Fname`, `DateBirthday`, `email`, `login`, `password`, `Stat`, `Country`, `City`) VALUES (NULL, '$name', '$surname', '$fname', '$dateBirth', '$email', '$login',  '$password', '$stat', '$country', '$city')");
            echo 'Успішно зареєстровано.<br>Вас автоматично буде перенаправлено до сторінки входу';
            echo '<script type="text/javascript">
                    setTimeout(\'location.href="SignIn.php"\', 3000);
                    </script>';
        }
        else{
            echo'Помилка при реєстрації.Не всі поля заповнено або паролі не збігаються.<br>Вас автоматично буде перенаправлено до реєстрації. ';
            echo '<script type="text/javascript">
                  setTimeout(\'location.href="SignIn.php"\', 3000);
                  </script>';
            exit();
        }
    }
}


