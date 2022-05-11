<?php
include "config/we.php";
// подключились к бд и задаем переменную чтобы потом выводить значенияиз бд 
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Иконка -->
  <link rel="icon" href="img/mods_photos/fav.png" type="image/x-icon">
  <!-- Подключили шрифты -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>  

  <!-- Подключили бутстрап -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">

    <title>Список заявок </title>
</head>
<!-- шаблон таблицы  -->
<body>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th>Идентификатор </th>
      <th>Имя</th>
      <th>Фамилия и отчество  </th>
      <th>E-mail</th>
    </tr>
  </thead>

  
<?php
  $products = mysqli_query($connect, "SELECT * FROM `registration`");

/*
 * Преобразовываем полученные данные в нормальный массив
 */

$products = mysqli_fetch_all($products);

/*
 * Перебираем массив и рендерим HTML с данными из массива
 * Ключ 0 - id
 * Ключ 1 - имя 
 * Ключ 2 -фамилия и отчество 
 * Ключ 4 - почта 
 */

foreach ($products as $product) {
    ?>
 
  <tbody>
  <tr>
    <td> <?= $product[0] ?></td>
    <td><?= $product[1] ?></td>
    <td><?= $product[2] ?></td>
    <td><?= $product[4] ?></td>
  </tr>
</tbody>
<?php
}
  ?>
  




</table>

     
    
       
</body>
</html>