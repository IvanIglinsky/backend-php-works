<?php
$FirstText=file_get_contents("FirstText.txt");
$SecondText=file_get_contents("SecondText.txt");
$First_str=explode(" ",$FirstText);
$Second_str=explode(" ",$SecondText);
$NewFile=fopen("Note.txt",'a+');
fwrite($NewFile, $FirstText);
$countWord=0;
fwrite($NewFile,"\nNewWrite\n");
for ($i=0;$i<count($First_str);$i++) {
    for ($j=0;$j<count($Second_str);$j++)
    if ($First_str[$i] == $Second_str[$j]) {
        fwrite($NewFile, $First_str[$i]."\n");
        $countWord++;
    }
    if($countWord>2)
        fwrite($NewFile, $First_str[$i]."\n");
}
$NewFileTxt=htmlentities(file_get_contents("Note.txt"));
echo $NewFileTxt."<br>";
