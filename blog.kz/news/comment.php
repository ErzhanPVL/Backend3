<?php
$connect=mysqli_connect("localhost", "root", "", "test");
mysqli_query($connect, "INSERT INTO comments{$_GET['num']} (text, autor) VALUES ('{$_GET['text']}','{$_GET['usr']}')");
header ("Location: blog.php?num={$_GET['num']}")
?>