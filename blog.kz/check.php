<?php 
$connect=mysqli_connect("localhost","root","","test");
$data=mysqli_query($connect, "SELECT * FROM `users`");
class check//Класс для работы с проверкой логина и пароля
{
	
	function match($data)
	{
		while($user=mysqli_fetch_array($data))
		{
			if($_POST['usr']==$user['login'] && $_POST['pwd']==$user['password'])//Проверка на совпадение с базой данных
			{
				return 1;
			}
		}
	return 0;
	}
	
	function reloc($data)
	{
		if ($this->match($data)==1) header("Location: news\index.php");//Переход при совпадение с какой то записью
		else header ("Location: index.php"); //Возврат в случае неудачи
	}
}

$object=new check;
$object->reloc($data);

?>