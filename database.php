<?php

$link = mysqli_connect("localhost","mysql","555","Acrostia");


if (mysqli_connect_errno()) 
{
	echo 'ошибка подключения к базе данных';
	exit();
}

?>