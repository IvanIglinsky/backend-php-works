<?php
$login=$_POST['login'];
$password=$_POST['password'];
if (mkdir("./Task4/$login"))
    echo "Папка успішно створена";
else
    echo "Папка не створена";
mkdir("./Task4/$login/video");
fopen("E:\ospanel\domains\Lab3\Task4\\$login\\video/video.txt","a+");
mkdir("./Task4/$login/music");
fopen("E:\ospanel\domains\Lab3\Task4\\$login\\music/music.txt","a+");
mkdir("./Task4/$login/photo");
fopen("E:\ospanel\domains\Lab3\Task4\\$login\\photo/photo.txt","a+");