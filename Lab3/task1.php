<?php
$text=$_POST['Text'];
$search=$_POST['Search'];
$refract=$_POST['Refract'];

$result_text = str_replace($text, $refract,$text);
$result_refract=strripos($text,$search);
echo "Результат заміни:";
echo $result_text;
echo "<br>Результат пошуку:слова($search) знайдено в ($text) в позиції ($result_refract) ";


