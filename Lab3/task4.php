<?php
$TextFirst=$_POST['FirstText'];
$TextSecond=$_POST['SecondText'];
$date1=strtotime($TextFirst);
$date2=strtotime($TextSecond);
$sec=abs($date1-$date2);
$res=floor($sec/86400);
echo $res;

