<?php 
	 
		 $connect=mysql_connect('localhost',
								'my_bd_user',
								'123');
		 $database=mysql_select_db('my_bd');
		 mysql_set_charset('utf8');
		  if (!$connect||!$database){
			 exit (mysql_error());
		}
?>