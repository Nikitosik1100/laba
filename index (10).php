<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, tr, td{
        border: 2px solid #000;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <td>user_ID</td>
      <td>user_name</td>
      <td>food</td>
    </tr>
    <?php
$connect = new mysqli("localhost", "root", "", "users");
if ($connect->connect_error) {
  die("Ошибка подключения к базе данных: " . $connect->connect_error);
}
$sql = "SELECT * FROM users";
if ($result = $connect->query($sql)) {
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["user_ID"] . "</td>";
            echo "<td>" . $row["user_name"] . "</td>";
            echo "<td>" . $row["food"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "Нет данных в базе данных";
}
      ?>
  </table>
</body>
</html>







