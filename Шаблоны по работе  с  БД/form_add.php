<?php
	$connect=mysql_connect('localhost',
								'my_bd_user',
								'123');
	$database=mysql_select_db('my_bd');
	mysql_set_charset('utf8');
	if (!$connect||!$database){
	exit (mysql_error());
	}
	if(isset($_POST['add']))
	{
		$autor=$_POST['autor'];
		$title=$_POST['title'];
		$text=$_POST['text'];
		
		$finish=mysql_query("INSERT INTO 122
					(name,title,text) VALUES
					('$autor','$title','$text')");
					if($finish == 'true') 
		{
			echo "Ваши данные успешно добавлены";
		}
					else
		{
			echo "Ваши данные не добавлены";
		}
		mysql_close();
	}
	
	?>