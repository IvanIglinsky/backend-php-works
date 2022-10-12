<?php
$WordFile=file_get_contents("FirstText.txt","a+");
$Word_str=explode(' ',$WordFile);
$NewFile=fopen('SortedText.txt','a+');
sort($Word_str);
foreach ($Word_str as $item)
    fwrite($NewFile,$item.' ');
$NewTxt=htmlentities(file_get_contents("SortedText.txt"));
echo $NewTxt;
file_put_contents('SortedText.txt', '');