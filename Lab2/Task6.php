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
<h3>Task 1 </h3>

<p>
    <?php
    echo '
    <form action="" method="post">
    <label for="arr">Введіть масив <input type="text" id="arr" name="arr"></label>
    <input type="submit" name="res" value="make" id="res"></form>
    ';
    function arr($arr)
    {
        $newarr = [];
        for ($i = 0; $i < count($arr); $i++)
            if (array_search($arr[$i], $arr) == $i)
                $newarr[] = $arr[$i];
        return $newarr;
    }
    $a=intval($_POST['arr']);
    $arr=str_split($a);
    $a = arr($arr);
    for ($i = 0; $i < count($a); $i++)
        echo $a[$i] . " ";
    ?>
</p>
<h3>Генератор імен Task 2</h3>
<p>
    <?
    function NewName($arr)
    {
        $rand_i = mt_rand(0, count($arr));
        $name = mb_substr(mb_strtoupper($arr[$rand_i]), 0, 1) .
            mb_substr($arr[$rand_i], 1);
        for ($i = 0; $i < mt_rand(2, 4); $i++)
            $name .= $arr[mt_rand(0, count($arr))];
        return $name;
    }
    $ar = ['ха', 'то', 'ри', 'за', 'ві', 'ху', 'жо', 'рі', 'те', 'а', 'чі', 'са', 'н', 'ло', 'ши','чи','на'];
    echo NewName($ar);
    ?>
</p>
<h3>Array Task 3</h3>
<p>
    <?php
    function createArray()
    {
        $arr = [];
        for ($i = 0; $i < mt_rand(3, 7); $i++)
            $arr[] = mt_rand(10, 20);
        return $arr;
    }
    function add_arrays($arr1, $arr2)
    {
        $newarr = arr(array_merge($arr1, $arr2));
        sort($newarr);
        return $newarr;
    }
    $a1 = createArray();
    echo "Массив 1: <br>";
    for ($i = 0; $i < count($a1); $i++)
        echo $a1[$i] . " ";
    echo "<br>";
    echo "Массив 2:<br>";
    $a2 = createArray();
    for ($i = 0; $i < count($a2); $i++)
        echo $a2[$i] . " ";
    echo "<br>";
    echo "Массив після функції:<br>";
    $arr = add_arrays($a1, $a2);
    for ($i = 0; $i < count($arr); $i++)
        echo $arr[$i] . " ";
 ?>
</p>
</body>
</html>
