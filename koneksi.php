<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("guestbook");
 
	$name	= htmlentities(mysql_real_escape_string($_POST['name']));
	$email	= htmlentities(mysql_real_escape_string($_POST['email']));
	$message	= htmlentities(mysql_real_escape_string($_POST['message']));
	$date	= time();
		
 		$result=mysql_query("INSERT INTO bukutamu VALUES(NULL , '$name', '$email', '$message', '$date')");

if($result){
echo "Successful";
echo "<BR>";}

else {
echo "ERROR";
}

mysql_close();

?>