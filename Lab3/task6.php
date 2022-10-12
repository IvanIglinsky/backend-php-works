<?php
$Name=$_POST['Named'];
$Comment=$_POST['Comment'].PHP_EOL;
$fd=fopen("$Name.txt",'a+');
fwrite($fd,$Comment);
$fileTxt=file("$Name.txt");
foreach ($fileTxt as $OneTxt)
    echo $OneTxt."<br>";