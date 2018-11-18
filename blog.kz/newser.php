<?php 
$connect=mysqli_connect("localhost","root","","test");
$usr=$_POST['newusr'];
$pwd=$_POST['newpwd'];

if(!empty($usr) && !empty($pwd))//Проверка на пустые поля
{
    mysqli_query($connect, "INSERT INTO users (usr,pwd) VALUES ('{$usr}', '{$pwd}')");//Добавление новой записи в базу пользователей
    header("Location: index.php");
}
?>