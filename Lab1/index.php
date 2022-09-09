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
<?php
    echo '<h2>Task 2</h2>';
    echo 'Полину в мріях в купель океану,<br> <div style="margin-left: 40px;">Відчую <b>шовковистість</b> глибини,</div>';
    echo 'Чарівні мушлі з дна собі дістану,<br><div style="margin-left: 5px;">Щоб <b>взимку</b></div>
          <div style="margin-left: 40px; text-decoration: underline">тішили</div>
          <div style="margin-left: 80px;">мене</div><div style="margin-left: 110px;margin-bottom: 50px;">вони…</div>';
    echo '<h2>Task 3</h2>';
    $a=1500/36;
    echo "<div>По актуальному курсі 1500 гри можна обміняти на: </div> ";
    printf('%.2f',$a);
    echo '<h2>Task 4</h2>';
    echo 'Кидаємо кубик...<br>';
    $b=mt_rand(1,6);
    echo "Випало:$b";
    echo '<h2>Task 5</h2>';
    echo 'Кидаємо кубики...<br>';
    $FirstPeople=mt_rand(1,6);
    $SecondPeople=mt_rand(1,6);
    echo "<br>У людини випало $FirstPeople і $SecondPeople <br>";
    $FirstRobot=mt_rand(1,6);
    $SecondRobot=mt_rand(1,6);
    echo "<br>У робота випало $FirstRobot і $SecondRobot<br>";
    if ($FirstPeople == $FirstRobot and $SecondPeople == $SecondRobot)
        echo "У вас дабл вам повезло";
    echo '<h2>Task 6</h2>';
    $Num=mt_rand(100,999);
    $firsNum=$Num/100%10;
    $secondNum=$Num/10%10;
    $thiNum=$Num%10;
    $revers="$thiNum$secondNum$firsNum";
    $sum=($firsNum+$secondNum+$thiNum);
    echo "Число :$Num<br>";
    echo "Сума цифр:$sum<br>";
    echo "В зворотньом порядку:$revers<br>";
    $ar=array($thiNum,$secondNum,$firsNum);
    echo "Відсортовані цифри : ";
    for ($i=0;$i<3;$i++) {
        rsort($ar);
        echo "$ar[$i]";
    }
   ?>
</body>
</html>
