<!DOCTYPE html>
<html lang="en">
<head>
  <title>Отдельная статья</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">


    <div class="col-sm-9">

      <h4><small>
      <?php
    $connect=mysqli_connect("localhost","root","","test");//Соединяемся с базой данных
    $result=mysqli_query ($connect, "SELECT * FROM `blog` where id=1");
    $post=mysqli_fetch_array($result);
    echo $post['date'];//Выбираем запись даты из таблицы Блог
  ?>
      </small></h4>
      <hr>
      <h2><?php
      echo $post['header'];//Выбираем запись заголовка из таблицы Блог
  ?>
  </h2>
      <h5><span class="glyphicon glyphicon-time"></span> Опубликовал <?php
      echo $post['autor'];//Выбираем запись автора из таблицы Блог
  ?>
  </h5><br>
      <p><?php
      echo $post['text'];//Выбираем запись статьи из таблицы Блог
  ?>
  </p>
      <hr>

      <h4>Оставить комментарий:</h4>
      <form role="form" action="comment.php" method="get">
        <div class="form-group">
          <textarea class="form-control" rows="3" required name='text'></textarea>
        </div>
        <div class="form-group">
          <label for="usr">Псевдоним:</label>
          <input type="text" class="form-control" name="usr">
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
      </form>
      <br><br>
      
      <p><span class="badge"><?php 
    $result=mysqli_query($connect, "SELECT * FROM `comments`");
    echo mysqli_num_rows($result);
    ?>
      </span> комментарий:</p><br>
      
      <div class="row">
        <?php
            $result=mysqli_query($connect, "SELECT * FROM `comments`");
            while($data=mysqli_fetch_array($result))//Пробежимся по всем комментам из БД
            {
        ?>
        <div class="col-sm-2 text-center">
          <br><small>
        <?php 
            echo $data['date'];//Показываем дату коммента
        ?>
</small>
        </div>
        <div class="col-sm-10">
          <h4>
        <?php 
            echo $data['autor'];//Показываем автора коммента
        ?>
          </h4>
          <p>
        <?php 
            echo $data['text'];//Показываем текст коммента
        ?>
        </p>
          <br>
          </div>
        <?php
            }
        ?>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Тестовое задание 3</p>
</footer>

</body>
</html>
