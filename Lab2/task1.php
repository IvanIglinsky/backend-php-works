<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style >
        td{
            border: 1px solid black;
        }
        tr:nth-child(odd)
        {
            background: yellow;
        }

        table
        {
            font-size: 30px;
            border-collapse: collapse;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
function My_POW($a,$b)
{
    $res=1;
    for ($i=0;$i<$b;$i++)
    {
        $res*=$a;
    }
    return $res;
}
function FACTORIAL($a)
{
    $res1=1;
    for($i=2;$i<=$a;$i++) {
        $res1 *=$i;
    }
    return $res1;
}
function My_tg($a)
{
    $n = $a;
    $sin = 0;
    $i = 1;
    while (abs($n) > 0.0000000000001)
    {
        $sin += $n;
        $n *= -1 * $a * $a / ((2 * $i) * (2 * $i + 1));
        $i++;
    }
    return $sin / -pow(1 - $sin * $sin, 0.5);
}
function average($a, $b)
{
    $res = 0;
    for ($i = min($a, $b); $i <= max($a, $b); $i++)
        $res += $i;
    return $res / (abs($b - $a) + 1);
}
    $x=intval($_POST['x']);
    $y=intval($_POST['y']);
    $res1=My_POW($x,$y);
    $res2=FACTORIAL($x);
    $res3=My_tg($x);
    $res4=sin($x);
    $res5=cos($x);
    $res6=tan($x);
    $res7=$x+$y;
    $res8=$x-$y;
    $res9=$x*$y;
    $res10=$x/$y;
    $res11=average($x,$y);
  echo "<table>
        <tr>
        <td>x^y</td>
        <td>x!</td>
        <td>My_tg(x)</td>
        <td>Sin(x)</td>
        <td>Cos(x)</td>
        <td>Tg(x)</td>
        <td>X+Y</td>
        <td>X-Y</td>
        <td>X*Y</td>
        <td>X/Y</td>
        <td>Average(x,y)</td>
</tr>
   <tr>
        <td>$res1</td>
         <td>$res2</td>
         <td>$res3</td>
         <td>$res4</td>
         <td>$res5</td>
         <td>$res6</td>
         <td>$res7</td>
         <td>$res8</td>
         <td>$res9</td>
         <td>$res10</td>
         <td>$res11</td>
         
</tr>
</table>"
?>
</body>
</html>