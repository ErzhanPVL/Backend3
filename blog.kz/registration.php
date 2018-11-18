<!DOCTYPE html>
<html>
<head>
  <title>Регистрация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-sm-4">
        <form action="newser.php" method="post">
        <div class="form-group">
          <label for="usr">Придумайте логин:</label>
          <input type="text" class="form-control" name="newusr">
        </div>
        <div class="form-group">
          <label for="pwd">Придумайте пароль:</label>
          <input type="password" class="form-control" name="newpwd">
        </div>
        <button type="submit" class="btn btn-success">Регистрация</button>
        <br><br>
        <a href="index.php">Вход</a>
        </form>
    </div>
</div>

</body>
</html>