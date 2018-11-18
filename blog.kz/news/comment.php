<?php
$connect=mysqli_connect("localhost", "root", "", "test");
mysqli_query($connect, "INSERT INTO comments (text, autor) VALUES ('{$_GET['text']}','{$_GET['usr']}')");
header ("Location: blog.php")
?>