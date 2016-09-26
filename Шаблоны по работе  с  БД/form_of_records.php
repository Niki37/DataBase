<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Form</title>
 </head>
 <body>
 
	<form action="index.php" method="post">
			Автор<br/>
			<input type="text" name="autor"/><br>
			Заголовок<br/>
			<input type="text" name="title"/><br>
			Содержание<br/>
			<textarea name="text" cols="40" rows="10"></textarea>
			<br/>
			<input type="submit" name="add" value="Отправить"/>
	</form>
	
	<?php
		$connect=mysql_connect('localhost','user','123');							
		$database=mysql_select_db('my_database_test');
	
		
		if(isset($_POST['add']))
		{
			$autor=strip_tags(trim($_POST['autor']));
			$title=strip_tags(trim($_POST['title']));
			$text=strip_tags(trim($_POST['text']));
			$data=date("Y-m-d"); 
			$oclock= date("H:i:s");
			$true=mysql_query("
								INSERT INTO user(name,title,text,data,time) 
								VALUES('$autor','$title','$text','$data','$oclock')
								");
			if ($true=="true")
				{echo "true";}

	}
	?>
 </body>
</html>