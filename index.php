<?php
$jsondata = file_get_contents('data.json') or exit('Не удалось получить данные');
$data = json_decode($jsondata) or exit('Ошибка декодирования json');
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Телефонный справочник</title>
     <style >
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
     <h1>Телефонный справочник</h1>
     <h2>База данных</h2>
     <table>
       <tr>
         <td>Имя</td>
         <td>Фамилия</td>
         <td>Адрес</td>
         <td>Номер телефона</td>
       </tr>
       <?php foreach ($data->persons_data as $dataPerson) { ?>
         <tr>
           <td><?php echo (!empty($dataPerson->firstName)) ? $dataPerson->firstName : 'не удалось получить имя'; ?></td>
           <td><?php echo (!empty($dataPerson->lastName)) ? $dataPerson->lastName : 'не удалось получить фамилию'; ?></td>
           <td><?php echo (!empty($dataPerson->address)) ? $dataPerson->address : 'не удалось получить адрес'; ?></td>
           <td><?php echo (!empty($dataPerson->phoneNumber)) ? $dataPerson->phoneNumber : 'не удалось получить телефон'; ?></td>
         </tr>
      <?php } ?>
     </table>
   </body>
 </html>
