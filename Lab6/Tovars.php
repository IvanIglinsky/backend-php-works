<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
            border: 2px solid teal;
            padding: 5px;
        }
    </style>
</head>
<body>

</body>
</html>
<?php
try {
    $pdo = new PDO('mysql: host=localhost;port=3307;dbname=lab12', 'root', '');
    $sql = "SELECT * FROM tovar";
    $result = $pdo->query($sql);
    echo '<table>';
    echo '<tr><td>id</td><td>name</td><td>cost</td><td>kol</td><td>date</td></tr>';
    while($row = $result->fetch()) {
        echo "<tr><td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['cost']."</td>";
        echo "<td>".$row['kol']."</td>";
        echo "<td>".$row['date']."</td></tr>";
    }
    echo '</table>';
    echo '<h4>Добавить запис:</h4>';
    echo '<form action="Tovars.php" method="post">
            <input type="text" name="id" style="width: 30px;">
            <input type="text" name="name" style="width: 92px;">
            <input type="text" name="cost" style="width: 35px;">
            <input type="text" name="kol" style="width: 35px;">
            <input type="text" name="date" style="width: 90px;"><br><br>
            <input type="submit">
           </form>';
    echo '<h4>Видалить запис:</h4>';
    echo'<form action="Tovars.php" method="post">
              <input type="text" name="idDel" style="width: 30px;"><br><br>
              <input type="submit">
         </form>';
    if(isset($_POST['idDel'])) {
        $idDel=$_POST['idDel'];
        $pdo->query("DELETE FROM `tovar` WHERE `tovar`.`id` =$idDel ");
        header("Refresh:0; url=Tovars.php");
    }
    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['cost']) && isset($_POST['kol']) && isset($_POST['date']) ) {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $cost=$_POST['cost'];
        $kol=$_POST['kol'];
        $date=$_POST['date'];
        $pdo->query(" INSERT INTO `tovar` (`id`, `name`, `cost`, `kol`, `date`) VALUES ('$id', '$name', '$cost', '$kol', '$date')");
        header("Refresh:0; url=Tovars.php");
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}
