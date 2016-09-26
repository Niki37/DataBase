<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Database</title>
  </head>
  <body>
  	
  
 	 <?php 
 	 	include "form.php";
 		 $connect=mysql_connect('localhost',
 								'user',
 								'123');
 		//Подкючение  к Mysql
 		 $database=mysql_select_db('my_database_test');
 		 mysql_set_charset('utf8');
 		//Подкючение к БД
 		 
 		/*$result=mysql_query('SELECT * FROM user 
 							  ORDER BY date DESK
 							  ');*/
 		//Запрос user сортировать по id в обратном порядке(Не работает!)
 		 $result=mysql_query('SELECT * FROM user');
 		//Запрос к user			  
 		 if (!$connect||!$database){
 			 exit (mysql_error());
 		}
 		//Проверка подкючение  к  БД
 		mysql_close();
 		while ( $row=mysql_fetch_assoc($result))
 		{?>
 				<h1><?php echo $row['title']."<br>";?></h1>
 				<h3>Автор:<?php echo $row['name']."<br>";?></h3>
 				<p><?php echo $row['text']."<br>";?></p>
 				<h4>Дата публикации:<?php echo $row['data'];?></h4>
 				<h4><?php echo $row['time'];?></h4>
 				<hr/>
 			<?php
 		}
 		//Вывод содержимого БД
 			?>
  </body>
 </html> 