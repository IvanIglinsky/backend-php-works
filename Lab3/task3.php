<?php
$Name=$_POST['TextFile'];
$isMatched = preg_match('/[a-zA-Z0-9]+\.[t][x][t]$/', $Name, $matches);
$res=explode('.',$matches[0]);
echo 'Назва файлу: '.$res[0];