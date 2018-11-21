<!DOCTYPE html>
<html lang="en">
<head>
  <title>Список новостей</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="#">На главную</a></li>
  </ul>
  <p class="navbar-text">Добро пожаловать!</p>
</nav>

<div class="container">
  <h2>Статьи</h2>            
  <table class="table">
    <thead>
    
    <tr>
        <th>№</th>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>Автор</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $connect=mysqli_connect("localhost","root","","test");//Соединяемся с базой данных
  $data=mysqli_query($connect,"SELECT * FROM `blog`");//Выбираем все записи из таблицы Блог
  $cnt=0;//Присваиваем переменной значение 0
  while($post=mysqli_fetch_array($data)){//Создаем цикл:"Пока в таблице есть записи"
?>  
    <tr>
        <td><?php echo ++$cnt;//с каждой новой записью, число увеличивается на 1?></td>
        <td><?php echo "<a href='blog.php?num={$cnt}'>", $post['header'];// заголовок, который передаёт параметр номера новости?></a></td>
        <td><?php echo $post['text'];// основной текст?></td>
        <td><?php echo $post['autor'];// автор?></td>
    </tr><?
  }//Заполняем ячейки
    ?>
    </tbody>
  </table>
</div>

</body>
</html>