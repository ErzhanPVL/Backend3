<?php 
$connect=mysqli_connect("localhost","root","","test");
$data=mysqli_query($connect, "SELECT * FROM `users`");
$ok=0;
while($user=mysqli_fetch_array($data))
{
    if($_POST['usr']==$user['usr'] && $_POST['pwd']==$user['pwd'])//Проверка на совпадение с базой данных
    {
        header("Location: news\index.php");//Переход при совпадение с какой то записью
        $ok=1;
    }
}
if ($ok==0) header ("Location: index.php"); //Возврат в случае неудачи
?>