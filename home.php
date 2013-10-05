 
 <link href= "home.css" rel="stylesheet" type="text/css" />
 <?php
$connect1 = mysql_connect("localhost","root","") or die("Couldn't connect!");
mysql_select_db("userinfo") or die("Couldn't find db");


$query1= mysql_query("SELECT * From text") or die(mysql_error());
$row = mysql_fetch_assoc($query1);
             $content=$row['content'];
       echo "<p id='data'> $content </p>";
	  
?>
