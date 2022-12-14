<?php
    $pdo = new PDO('mysql: host=localhost;port=3307;dbname=lab12', 'root', '');
    $query=$pdo->query('SELECT * FROM `users`');
