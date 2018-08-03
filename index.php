<?php
$pdo = new PDO("mysql:host=localhost; dbname=Books", "root", "");
$sql = $pdo->query("select * from books");
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Книги</title>
    <style>
      table {
       border: 2px solid black;
       text-align: center;
     }
     td {
      border: 1px solid black;
    }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <?php while ($row = $sql->fetch()) { ?>
          <td><?php echo $row['name'] . "<br />" ?></td>
          <td><?php echo $row['author'] . "<br />" ?></td>
          <td><?php echo $row['year'] . "<br />" ?></td>
          <td><?php echo $row['isbn'] . "<br />" ?></td>
          <td><?php echo $row['genre'] . "<br />" ?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
