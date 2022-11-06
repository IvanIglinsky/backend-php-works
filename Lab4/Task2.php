<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        input{
            border: 0;
            background: white;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<form action="Task2.php" method="post">
        <input type="submit" name="Sub_Big" value="Великий шрифт">
        <input type="submit" name="Sub_Medium" value="Середній шрифт">
        <input type="submit" name="Sub_small" value="Маленький шрифт">
</form>
</body>
</html>


<?php
if(isset($_POST['Sub_Big']))
{
    echo '<body style="font-size: 60px;"></body>';
    setcookie("fontSize","60px");
    echo '<a href="Task2Help.php">index</a>';
    echo '<body style="font-size: 60px;"></body>';
}
if(isset($_POST['Sub_Medium']))
{
    echo '<body style="font-size: 30px;"></body>';
    setcookie("fontSize","30px");
    echo '<a href="Task2Help.php">index</a>';
}
if(isset($_POST['Sub_small']))
{
    echo '<body style="font-size: 10px;"></body>';
    setcookie("fontSize","10px");
    echo '<a href="Task2Help.php">index</a>';
}
