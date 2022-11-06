<?php
$TextS=$_POST['startText'];
$pattern_reg="((https?:\/\/[\w\-\.!~?&=+\*'(),\/\#\:]+)((?!\<\/\w\>))*?)";
$searched_text=preg_match_all($pattern_reg,$TextS,$matches);
echo preg_replace($pattern_reg,"тут була адреса сайту",$TextS)."<br>";
preg_match_all($pattern_reg, $TextS, $matches);
if(preg_match_all($pattern_reg, $TextS, $matches)) {
    print_r($matches[0]);
}
