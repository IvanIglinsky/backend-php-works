<?php
$n=intval($_POST['square']);
header ("Content-type: image/jpeg");
$im = @ImageCreate (1200, 800)
or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 0, 0, 0);
$text_color = ImageColorAllocate ($im, 128, 255, 136);
imagesetthickness($im, 2);// thickness is changed
for($i=0;$i<$n;$i++){
    $x = mt_rand(0, 1000);
    $y = mt_rand(25, 600);
    $size=mt_rand(25, 200);
    $text_color = ImageColorAllocate ($im, 255, 0, 0);
    $border_color=ImageColorAllocate ($im, 255, 255, 255);
    imagefilledrectangle($im,$x,$y,$x+$size,$y+$size,$text_color);
    imagerectangle($im,$x,$y,$x+$size,$y+$size,$border_color);
}
Imagejpeg ($im);
