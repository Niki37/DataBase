<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Edit</title>
 </head>
 <body>	
	<?php

		$connect=mysql_connect('localhost','user','123');							
		$database=mysql_select_db('my_database_test');
		mysql_query("SET NAMES 'utf8' ");
		 $result=mysql_query("SELECT title,text,data,name,time FROM user
		 						WHERE id='3'
		 						"); //выборка, получить запись у которой id = 3  
		 mysql_close();
		 mysql_set_charset('utf8');
		 $row=mysql_fetch_assoc($result);
		
		if(isset($_POST['save'])) // отправка (условие )сохраненных данных 
		{
			$autor=strip_tags(trim($_POST['autor']));
			$title=strip_tags(trim($_POST['title']));
			$text=strip_tags(trim($_POST['txt']));
			$data=date("Y-m-d"); 
			$oclock= date("H:i:s");
			$true=mysql_query("
								INSERT INTO user(name,title,text,data,time) 
								VALUES('$autor','$title','$txt','$data','$oclock')
								");
			if ($true=="true")
				{echo "true";}

	}
	?>
	<form action="edit.php" method="post">
			Автор<br/>
			<input type="text" name="autor" value="<?php echo $row['name'];?>"/><br>
			Заголовок<br/>
			<input type="text" name="title" value="<?php echo $row['title'];?>" /><br>
			Содержание<br/>
			<textarea name="txt" cols="100" rows="20" value="<?php echo $row['text'];?>"></textarea>
			<br/>
			<input type="submit" name="save" value="Сохранить"/>
	</form>
 </body>
</html>