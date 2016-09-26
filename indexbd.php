<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Тест</title>
	</head>
	<body>
		<?php

			$connection=mysql_connect("localhost","my_bd_user","123");//Подключение к пользователю "my_bd_user" с паролем "123" по "localhost"
			$bd=mysql_select_db("my_bd"); // Подключение к базе данных "my_bd"

			if(!$connection||!$bd){ // Условие и проверка 
			exit (mysql_error());
			}
			else
			{
			echo "connection complite!";
			}
			$result=mysql_query("SELECT*FROM user"); 
			while($row=mysql_fetch_array($result)){ // Пока в таблице есть значения они выводятся 
			echo $row['id']."<br>";
			echo $row['name']."<br>";
			echo $row['data']."<br>";
			echo $row['time']."<br>";
			echo $row['text']."<br>";
			}
		//Простой пример создния связи с Базой Данных 
		?>
	</body>
</html>
