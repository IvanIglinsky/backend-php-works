<?php
session_start();
require_once ('Config.php');
$login=$_GET['login'];
$sql = "DELETE FROM users WHERE `users`.`login` = '$login'";
$user= $pdo->query($sql);
$_SESSION['login']='';
$_SESSION['password']='';
session_destroy();
echo '<script>document.location.href=\'SignIn.php\';alert("Акаунт успішно видалений")</script>';

