<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$passErr=$emailErr="";
$password =$email="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$con=mysql_connect("localhost","root","") or die("c11onnection failed!");
//echo"11connected";
mysql_select_db("userinfo") or die(mysql_error());
//echo "Connected!";
//$date = date("Y-m-d");
//$write=mysql_query("INSERT INTO userdata VALUES('2','tarunnarang1992@gmail.com','arora1')") or die(mysql_error());
$extra=mysql_query("SELECT * FROM userdata ");
while($row = mysql_fetch_assoc($extra))//assoc-means associative array which stores key and value
{
$uid=       $row['uid'];
$email=$row['email'];
$password=$row['password'];
$userpass=$password;
$userpassencr=md5($userpass);
//echo $userpassencr;
    $submitpass=md5($_POST["pass"]) or die(mysql_error());
	$useremail=$email or die(mysql_error());
	//$submitemail=$_POST["email"] or die(mysql_error());
	//echo $submitemail;
	if($useremail==$_POST["email"]) 
	{
	  if($submitpass==$userpassencr)
	  {
	    echo "Connected <br>";
	}
	else
	echo "Password or username is incorrect";

}
else die(mysql_error());	
	

	//echo "$uid $email $password <br>";
}

if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 
       }
     }   if (empty($_POST["pass"]))
     {
	 $passErr = "password is required";
	 }
 /*  else
     {
	 $userpass="abc";
$userpassencr=md5($userpass);
//echo $userpassencr;
    $submitpass=md5($_POST["pass"]);
	if($submitpass==$userpassencr){
	echo "Connected  $submitpass to ".$userpassencr."<br>";
	}
	else
	die("error");
	 }*/
	 }
	 function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>
<form action="password.php" method="POST">

<label>E-mail:</label> <input type="text" name="email" value="<?php echo $email;?>"> <span class="error">* <?php echo $emailErr;?></span><br>
Password:<input type="password" name="pass" /><span class="error">* <?php echo $passErr;?></span><br>
   <br>
<input type="submit" name="Login" />
</form>
</body>