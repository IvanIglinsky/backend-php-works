<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="delete.php"  method="post">
    Логін:<input type="text" name="login"><br>
Пароль:<input type="text" name="password"><br>
<input type="submit" value="Send">
</form>
</body>
</html>
<?php
$login=$_POST['login'];
$password=$_POST['password'];
function recursiveRemoveDir($dir) {

    $includes = glob($dir.'/*');

    foreach ($includes as $include) {

        if(is_dir($include)) {

            recursiveRemoveDir($include);
        }
        else {

            unlink($include);
        }
    }
    if(rmdir($dir))
        echo "Каталог видалений";
    else
        echo "Проблема при видалені каталога";
}
recursiveRemoveDir("E:\OSPanel\domains\Lab3\Task4\/$login");
?>