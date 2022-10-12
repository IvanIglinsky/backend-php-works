<?php
$day=$_REQUEST['day'];
$month=$_REQUEST['month'];
$num_month=0;
$Month_str=['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень'];
for($i=0;$i<12;$i++)
    if($Month_str[$i]==$month)
        $num_month=$i;
$year=$_REQUEST['year'];

if(checkdate($day,$num_month,$year))
    echo "$day-$month-$year";
else
    echo "Помилка при введені дати";
