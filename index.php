<?php
$pdo = new PDO("mysql:host=localhost; dbname=Books", "root", "");
$sql = "select * from books";
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
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td><?php foreach ($pdo->query($sql) as $row) {
          echo $row['name'] . "<br />";
        } ?></td>
        <td><?php foreach ($pdo->query($sql) as $row) {
          echo $row['author'] . "<br />";
        } ?></td>
        <td><?php foreach ($pdo->query($sql) as $row) {
          echo $row['year'] . "<br />";
        } ?></td>
        <td><?php foreach ($pdo->query($sql) as $row) {
          echo $row['isbn'] . "<br />";
        } ?></td>
        <td><?php foreach ($pdo->query($sql) as $row) {
          echo $row['genre'] . "<br />";
        } ?></td>
      </tr>
    </table>
  </body>
</html>
