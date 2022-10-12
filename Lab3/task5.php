<!DOCTYPE html>
<html>
<body>
<form action = "task5_2.php" method = "POST">
    <select name="day" >
        <?php
        $NowDay=date('d');
        echo "<option>$NowDay</option>";
        for($d=1;$d<=31;$d++)
        {
            if($d<10)
                echo "<option name=\"day\">0$d</option>";
            else
                echo "<option name=\"day\">$d</option>";
        }
        ?>
    </select>
    <select name="month">
        <?php
        $NowMonth=date('m')-1;
        $Month=['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень'];
        echo "<option selected=\"$Month[$NowMonth]\">$Month[$NowMonth]</option>";
        for ($m=0;$m<12;$m++)
        {
            echo "<option name=\"month\">$Month[$m]</option>";
        }
        ?>
    </select>
    <select name="year" id="">
        <?php
        $nowYear=date('Y');

        echo "<option  selected=\"$nowYear\">$nowYear</option>";
        for ($y=1900;$y<=2022;$y++)
            echo "<option name=\"year\">$y</option>";
        ?>

    </select>
    <input type = "submit" />
</form>
</body>
</html>

