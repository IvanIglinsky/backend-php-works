<?php
$text=$_POST['cities'];
$arr=explode(" ",$text);
sort($arr,SORT_STRING);
foreach ($arr as $key => $val) {
    echo $val.' <br>';
}
