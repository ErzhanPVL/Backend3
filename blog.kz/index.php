<!DOCTYPE html>
<html>
<head>
  <title>Авторизация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-sm-4">
        <form action="check.php" method="post">
        <div class="form-group">
          <label for="usr">Логин:</label>
          <input type="text" class="form-control" name="usr">
        </div>
        <div class="form-group">
          <label for="pwd">Пароль:</label>
          <input type="password" class="form-control" name="pwd">
        </div>
        <button type="submit" class="btn btn-success">Вход</button>
        <br><br>
        <a href="registration.php">Регистрация</a>
        </form>
    </div>
</div>

</body>
</html>