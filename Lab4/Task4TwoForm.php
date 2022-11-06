<?php
session_start();
$values=[
    'login'=>"",
    'password'=>"",
    'TWOpassword'=>"",
    'Stat'=>"",
    'city'=>'',
    'checkboxArr'=>[],
    'AboutYour'=>''
];
$keys=array_keys($values);
foreach($keys as $key)
{
    if(isset($_SESSION[$key]))
        $values[$key]=$_SESSION[$key];
    if(isset($_POST[$key]))
        $values[$key]=$_SESSION[$key]=$_POST[$key];
}

?>
    <form action="Task4TwoForm.php" enctype="multipart/form-data" method="post">
        <table>
            <tr>
                <td>Логін:</td>
            <td><?php
                echo $_POST['login'];
                ?></td>
            </tr>
        <tr>
            <td>Пароль:</td>
            <td><?php
                if ($_POST['password']==$_POST['TWOpassword'])
                {
                    echo 'співпадає';
                }
                else
                {
                    echo 'не співпадає(перший-'.strlen($_POST['password']).', a другий-'.strlen($_POST['TWOpassword']).')';
                }

                ?></td>
        </tr>
        <tr>
            <td> Стать:</td>
            <td><?php
                echo $_POST['Stat'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Місто:
            </td>
            <td>
                <?php
                echo $_POST['city'];

                ?>
              </td></tr>
        <tr>
            <td>
                Улюблені ігри:</td>
            <td>
                <?php
                $arr=$_POST['checkboxArr'];
                if(empty($arr))
                {
                    echo "немає";
                }
                else {
                    $n = count($arr);
                    for ($i = 0; $i < $n; $i++)
                        echo $arr[$i] . '<br> ';
                }
                ?></td></tr>
        <tr>
        <td>Про себе:</td>
            <td>
                <?php
                $str=$_POST['AboutYour'];
                echo nl2br($str);
                ?>
            </td></tr>
        <tr>
            <td>Фотографія:</td>
            <td>
                <?php

                $img=$_FILES['Photo']['tmp_name'];
                $name = "img/".$_FILES["Photo"]["name"];
                move_uploaded_file($_FILES["Photo"]["tmp_name"], $name);
                echo "<img src='$name' class='img' width='300px' height='300px'>";
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><a href="Task4.php">Назад на головну</a></td>
        </tr>
    </table>
</form>
<?php
