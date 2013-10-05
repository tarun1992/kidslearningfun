<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kids fun</title>
<script src="rssticker.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="minorcss.css">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="logonew.png">
</head>

<body id="image">
<script src="jquery-1.10.2.js">
</script>

<ul id="navmenu">
    <li><a href="minor.php">
	
	<?php
     include "connect.php";
     $extract=mysql_query("SELECT * FROM menu_home");
     $row = mysql_fetch_assoc($extract) or die(mysql_error());
     $home=       $row['home'];
     echo $home
	?>
	 </a></li>
	 <li><a href="?view=subject" id="sub">
<?php
     include "connect.php";
     $extract=mysql_query("SELECT * FROM menu_subject");
     $row = mysql_fetch_assoc($extract) or die(mysql_error());
     $subject=       $row['subject'];
     echo $subject
	 ?>
	 </a><span class="darrow">&#9660;</span>       <!--/*9660 for down arrow*/-->
	   <ul class="sub1">
	       <li><a href="?view=english" id="esub">
		   <?php
           include "connect.php";
           $extract=mysql_query("SELECT * FROM menu_english");
           $row = mysql_fetch_assoc($extract) or die(mysql_error());
           $english=       $row['english'];
           echo $english
		   ?>
		   </a><span class="rarrow">&#9654;</span>  <!--/*9654 for right arrow*/-->
		      <ul class="sub2">
	             <li><a href="?view=egradek">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_gradek");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $gradek=       $row['gradek'];
                 echo $gradek
				 ?>
		    </a></li>
		         <li><a href="?view=egrade1">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade1");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade1=       $row['grade1'];
                 echo $grade1
                 ?>
            </a></li>
		         <li><a href="?view=egrade2">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade2"); 
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade2=       $row['grade2'];
                 echo $grade2
                 ?>
            </a></li>
		         <li><a href="?view=egrade3">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade3"); 
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade3=       $row['grade3'];
                 echo $grade3
				 ?>
			</a></li>
				 <li><a href="?view=egrade4">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade4");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade4=       $row['grade4'];
                 echo $grade4
                 ?>
		    </a></li>
				 <li><a href="?view=egrade5">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade5");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade5=       $row['grade5'];
                 echo $grade5
                 ?>
            </a></li>
				 
    </ul>
</li>
		         <li><a href="?view=science">
		         <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM menu_science");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $science=       $row['science'];
                 echo $science
				 ?>
				 </a><span class="rarrow">&#9654;</span> 
		        <ul class="sub2">
	             <li><a href="?view=sgradek">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_gradek");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $gradek=       $row['gradek'];
                 echo $gradek
				 ?>
		    </a></li>
		         <li><a href="?view=sgrade1"><?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade1");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade1=       $row['grade1'];
                 echo $grade1
				 ?>
			</a></li>
		         <li><a href="?view=sgrade2">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade2");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade2=       $row['grade2'];
                 echo $grade2
				 ?>
			</a></li>
		         <li><a href="?view=sgrade3">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade3");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade3=       $row['grade3'];
                 echo $grade3
                 ?>
            </a></li>
				 <li><a href="?view=sgrade4">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade4");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade4=       $row['grade4'];
                 echo $grade4
				 ?>
			</a></li>
				 <li><a href="?view=sgrade5">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade5");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade5=       $row['grade5'];
                 echo $grade5
                 ?>
			</a></li>
				 
        </ul>
        </li>
		   <li><a href="?view=maths">
		         <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM menu_maths");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $maths=       $row['maths'];
                 echo $maths
				 ?>
				 </a><span class="rarrow">&#9654;</span> 
		       <ul class="sub2">
	             <li><a href="?view=mgradek">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_gradek");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $gradek=       $row['gradek'];
                 echo $gradek
				 ?>
			</a></li>
		         <li><a href="?view=mgrade1">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade1"); 
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade1=       $row['grade1'];
                 echo $grade1
				 ?>
				 </a></li>
		         <li><a href="?view=mgrade2">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade2");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade2=       $row['grade2'];
                 echo $grade2
				 ?>
			</a></li>
		         <li><a href="?view=mgrade3">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade3");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade3=       $row['grade3']; 
                 echo $grade3
				 ?>
			</a></li>
				 <li><a href="?view=mgrade4">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade4");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade4=       $row['grade4'];
                 echo $grade4
				 ?>
			</a></li>
				 <li><a href="?view=mgrade5">
				 <?php
                 include "connect.php";
                 $extract=mysql_query("SELECT * FROM submenu_grade5");
                 $row = mysql_fetch_assoc($extract) or die(mysql_error());
                 $grade5=       $row['grade5'];
                 echo $grade5
				 ?>
			</a></li>
				 
	    </ul>
    </li>
</ul>
 </li>
	              <li><a href="?view=funtime">
	              <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM menu_funtime");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $funtime=       $row['funtime'];
                  echo $funtime
				  ?>
				  </a><span class="darrow">&#9660;</span>
	              <ul class="sub1">
	              <li><a href="?view=brainteasers">
		          <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM menu_brainteasers");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $brainteasers=       $row['brainteasers'];
                  echo $brainteasers
				  ?>
			</a></li>
		          <li><a href="?view=quiz">
		          <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM menu_quiz");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $quiz=       $row['quiz'];
                  echo $quiz
				  ?>
			</a></li>
		          <li><a href="?view=videos">
		          <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM menu_videos");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $videos=       $row['videos'];
                  echo $videos
				  ?>
			</a></li>
		          <li><a href="?view=games">
		          <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM menu_games");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $games=       $row['games'];
                  echo $games
				  ?>
				  </a></li>
	   </ul>
    </li>
	              <li><a href="?view=aboutus"><?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM menu_aboutus");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $aboutus=       $row['aboutus'];
                  echo $aboutus
				  ?>
				  </a>
	   
    </li>
</ul>	




 
<!-- code to sign up and login-->
<!--div class="signup">
<div id="sign"><a href="signUp.php"><!?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM b_signup");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $signup=       $row['signup'];
				  echo $signup?></a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div id="log"><a href="login.php"><!?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM b_login");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $login=       $row['login'];
				  echo $login?></a></div>
<!--a href="forgotPassword.php"  target="_blank">Forgot Password?</a-->
<!--/div-->
<iframe src="signUp.php" width="1300" height="600" id="sign1" scrolling="no" frameborder="0" ></iframe>
<script>
 $(document).ready(function () {
 $('#sign1', window.parent.document).hide();
   $("#sign").click(function() {
                    $('#sign1', window.parent.document).show();
                });
            });
</script>
<iframe src="login.php" id="log1" width="1300" height="600"  scrolling="no" frameborder="0" ></iframe>
<script>
 $(document).ready(function () {
 $('#log1', window.parent.document).hide();
   $("#log").click(function() {
                    $('#log1', window.parent.document).show();
                });
            });
</script>
<div class="signup">
<div id="sign"><a href="#">SIGN UP</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div id="log"><a href="#">LOG IN</a></div>
<!--a href="forgotPassword.php"  target="_blank">Forgot Password?</a-->
</div>
<?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='1'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image12=       $row['url'];
				  ?>

<img src="<?php echo $image12 ?>" id='monkey' style=" height:50px;width:50px;margin-left:370px;">

<div style="height: 225px" id="rss">
<script type="text/javascript">
//rssticker_ajax(RSS_id, cachetime, divId, divClass, delay, optionalswitch)
//1) RSS_id: "Array key of RSS feed in PHP script"
//2) cachetime: Time to cache the feed in minutes (0 for no cache)
//3) divId: "ID of DIV to display ticker in. DIV dynamically created"
//4) divClass: "Class name of this ticker, for styling purposes"
//5) delay: delay between message change, in milliseconds
//6) optionalswitch: "optional arbitrary" string to create additional logic in call back function

//document.write("funfacts: (Fade Effect enabled. Title+date shown)")
new rssticker_ajax("funfacts", 600, "cnnbox", "cnnclass", 3000, "date")

//document.write("<br />dynamic driveNews: (Title+date+description shown)")
//new rssticker_ajax("dynamicdrive", 1200, "ddbox", "bbcclass", 3500, "date+description")

</script>
</div>

<?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='19'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image11=       $row['url'];
				  ?>

<img id="logo" src="<?php echo $image11 ?>" style="height:100px; width:250px;"/>







<div id="grades">
<div id="div1"><a href="#" target="_blank"></div><h4 id="circle1">Grade</br>&nbsp;&nbsp;K</h4></a>
<div id="div2"><a href="#" target="_blank"></div><h4 id="circle2">Grade</br>&nbsp;&nbsp;1</h4></a>
<div id="div3"><a href="#" target="_blank"></div><h4 id="circle3">Grade</br>&nbsp;&nbsp;2</h4></a>
<div id="div4"><a href="#" target="_blank"></div><h4 id="circle4">Grade</br>&nbsp;&nbsp;3</h4></a>
<div id="div5"><a href="#" target="_blank"></div><h4 id="circle5">Grade</br>&nbsp;&nbsp;4</h4></a>
<div id="div6"><a href="#" target="_blank"></div><h4 id="circle6">Grade</br>&nbsp;&nbsp;5</h4></a>
</div>
<div id="data">
<?php
//$connect1 = mysql_connect("localhost","root","") or die("Couldn't connect!");
//mysql_select_db("userinfo") or die("Couldn't find db");
include "connect.php";

$query1= mysql_query("SELECT * From text") or die(mysql_error());
$row = mysql_fetch_assoc($query1);
             $content=$row['content'];
       echo $content;
?>
</div>

  <script>
$(document).ready(function(){
$("#sub").click(function(){
  $("#data").hide();
  $("#stage").hide();
  $("#grades").hide();
 $("#wrapper").hide();
 $("#wrapper1").hide();
 $("#wrapper2").hide();
 $("#wrapper3").hide();
 $("#wrapper4").hide();
  });
  });
  </script>
  <script>  
$(document).ready(function(){
$("#sign").click(function(){
  $("#data").hide();
  $("#stage").hide();
  $("#grades").hide();
 $("#wrapper").hide();
 $("#wrapper1").hide();
 $("#wrapper2").hide();
 $("#wrapper3").hide();
 $("#wrapper4").hide();
 $("#rss").hide();
 $("#logo").hide();
 $("#habit").hide();
 $("#monkey").hide();
  $("#sign").hide();
   $("#log").hide();
  });
  });
  </script>
    <script>  
$(document).ready(function(){
$("#log").click(function(){
  $("#data").hide();
  $("#stage").hide();
  $("#grades").hide();
 $("#wrapper").hide();
 $("#wrapper1").hide();
 $("#wrapper2").hide();
 $("#wrapper3").hide();
 $("#wrapper4").hide();
 $("#rss").hide();
 $("#logo").hide();
 $("#habit").hide();
 $("#monkey").hide();
  $("#sign").hide();
   $("#log").hide();
  });
  });
  </script>

  <?php
include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id=8");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#image').css('background-image','url(' + path + ')');</script>";
?>
  <?php               
include "connect.php";
  $extract=mysql_query("SELECT * FROM images where img_id=2");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#div1').css('background-image','url(' + path + ')');</script>";
?>       
	<?php
	include "connect.php";
	$extract=mysql_query("SELECT * FROM images where img_id=3");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#div2').css('background-image','url(' + path + ')');</script>";
?>  
<?php  

include "connect.php";
  $extract=mysql_query("SELECT * FROM images where img_id=4");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#div3').css('background-image','url(' + path + ')');</script>";
     ?>                    
		
<?php

include "connect.php";
		$extract=mysql_query("SELECT * FROM images where img_id=5");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#div4').css('background-image','url(' + path + ')');</script>";
     ?>                     
		
<?php

include "connect.php";
		$extract=mysql_query("SELECT * FROM images where img_id=6");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#div5').css('background-image','url(' + path + ')');</script>";
?>     
<?php	
include "connect.php";
	$extract=mysql_query("SELECT * FROM images where img_id=7");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  
            echo "<script>
			var path=encodeURI('$image6');
                  $('#div6').css('background-image','url(' + path + ')');</script>";
  
  ?>
<div id="menu_items">
	<?php include "menu_items.php"; ?>
	</div>
	<script type="text/javascript">
addLoadListener(getEmployeeInfo);

function getEmployeeInfo() {

	if (location.hash) {
		ajaxInitiate(location.hash.replace("#","")+".php");
	}

	var myLinksCollection = document.getElementsByTagName("a");

	for (i=0;i<myLinksCollection.length;i++) {
		myLinksCollection[i].onclick = function() {
			if (this.href.indexOf("view=") !== -1) {
				var clickedHREF = this.href;
				var clickedView = clickedHREF.split("view=");
				ajaxInitiate(clickedView[1]+'.php');
				location.hash = clickedView[1];
				return false;
			}
		}
	}

}

function ajaxInitiate(currentFile) {
var ajaxCapable = getXhrObject();
if (ajaxCapable) {
	ajaxCapable.onreadystatechange = function() {
		serverResponse(ajaxCapable);
	};
	ajaxCapable.open("POST", currentFile, true);
	ajaxCapable.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajaxCapable.send(null);
	}
	else {
		document.getElementById("menu_items").innerHTML += "Your Browser Does not Support Ajax. To view this page, please disable JavaScript.";
	}
}

function serverResponse(ajaxCapable) {
	if (ajaxCapable.readyState == 4) {
		if (ajaxCapable.status == 200 || ajaxCapable.status == 404) {
			document.getElementById("menu_items").innerHTML = ajaxCapable.responseText;
		}
	}
}

function getXhrObject() {  
	var xhrObject = false;
	// Most browsers (including IE7-IE8) use the 3 lines below
	if (window.XMLHttpRequest) {
		xhrObject = new XMLHttpRequest();
	}
	// Internet Explorer 5/6 will use one of the following
	else if (window.ActiveXObject) {
		try {   
		xhrObject = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(err) {
				try {
				xhrObject = new ActiveXObject("Microsoft.XMLHTTP");
				} catch(err) {
				xhrObject = false;
				}
		}
	}
	return xhrObject;
}

// The code below is the load listener that helps run multiple events on the same page. All JS libraries have this built in.
function addLoadListener(fn)
{
	if (typeof window.addEventListener != 'undefined')
	{
	window.addEventListener('load', fn, false);
}
else if (typeof document.addEventListener != 'undefined')
{
	document.addEventListener('load', fn, false);
}
else if (typeof window.attachEvent != 'undefined')
{
	window.attachEvent('onload', fn);
}
else
{
	var oldfn = window.onload;
	if (typeof window.onload != 'function')
	{
	window.onload = fn;
	}
	else
	{
	window.onload = function()
	{
	oldfn();
	fn();
	};
	}
	}
}
</script>


<div id="stage" style="padding-left: 140px; height: 160px;">
<div id="spinner" style="-webkit-transform-origin: 180px 0 0;transform-origin: 180px 0 0;">
<?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id=9");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image1=       $row['url'];
                  echo "<img style='-webkit-transform: rotateY(0deg) translateX(180px);transform: rotateY(0deg) translateX(180px); padding: 0 0 0 160px;' src='$image1' width='200' height='160' alt=''/>";
				  ?>
				  <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='10'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image2=       $row['url'];
                  echo "<img style='-webkit-transform: rotateY(-72deg) translateX(180px);transform: rotateY(-72deg) translateX(180px); padding: 0 0 0 147px;' src='$image2' width='213' height='160' alt=''/>";
				  ?>
				   <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='11'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image3=       $row['url'];
                  echo "<img style='-webkit-transform: rotateY(-144deg) translateX(180px);transform: rotateY(-144deg) translateX(180px); padding: 0 0 0 120px;' src='$image3' width='240' height='160' alt=''/>";
				  ?>
				  <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='12'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image4=       $row['url'];
                  echo "<img style='-webkit-transform: rotateY(-216deg) translateX(180px);transform: rotateY(-216deg) translateX(180px); padding: 0 0 0 147px;' src='$image4' width='213' height='160' alt=''/>";
				  ?>
				  <?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='13'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image5=       $row['url'];
                  echo "<img style='-webkit-transform: rotateY(-288deg) translateX(180px);transform: rotateY(-288deg) translateX(180px); padding: 0 0 0 122px;' src='$image5' width='238' height='160' alt=''/>";
				  ?>
         				  
				  
<!--img style="-webkit-transform: rotateY(0deg) translateX(180px);transform: rotateY(0deg) translateX(180px); padding: 0 0 0 160px;" src="brush.jpg" width="200" height="160" alt=""-->
<!--img style="-webkit-transform: rotateY(-72deg) translateX(180px);transform: rotateY(-72deg) translateX(180px); padding: 0 0 0 147px;" src="handwash.jpg" width="213" height="160" alt=""-->
<!--img style="-webkit-transform: rotateY(-144deg) translateX(180px);transform: rotateY(-144deg) translateX(180px); padding: 0 0 0 120px;" src="greenvegetables.jpg" width="240" height="160" alt=""-->
<!--img style="-webkit-transform: rotateY(-216deg) translateX(180px);transform: rotateY(-216deg) translateX(180px); padding: 0 0 0 147px;" src="kids-cleaning.jpg" width="213" height="160" alt=""-->
<!--img style="-webkit-transform: rotateY(-288deg) translateX(180px);transform: rotateY(-288deg) translateX(180px); padding: 0 0 0 122px;" src="prayer.jpg" width="238" height="160" alt=""-->
</div>
</div>
<p id="habit"><a href="#">Good Habits Every Kid Should Follow</a></p>
<script>
$(document).ready(function(){
$("#sub").click(function(){
  $("#data").hide();
  $("#stage").hide();
  $("#grades").hide();
 $("#wrapper").hide();
 $("#wrapper1").hide();
 $("#wrapper2").hide();
 $("#wrapper3").hide();
 $("#wrapper4").hide();
 $("#habit").hide();
  });
  });
  </script>
<script>
$(document).ready(function(){
$("#esub").click(function(){
  $("#data").hide();
  $("#stage").hide();
  $("#grades").hide();
 $("#wrapper").hide();
 $("#wrapper1").hide();
 $("#wrapper2").hide();
 $("#wrapper3").hide();
 $("#wrapper4").hide();
 $("#habit").hide();
  });
  });
  </script>
 
<div>
<p id="wrapper"> 
<a href="#"><?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='14'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image6=       $row['url'];
				  echo"<img src='".$image6." 'style='width:300px;border:4px solid #669900;border-radius:15px;'/>";?><span id="guide">Guidelines for Parents and Teachers</span></a></p>
<p id="wrapper1"> 
<a href="strytime.php"><?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='15'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image7=       $row['url'];
				  echo"<img src='".$image7." 'style='width:200px; height:150px;border:4px solid #669900;border-radius:15px;'/>";?><span id="stry">STORY TIME</span></a></p>
<p id="wrapper2"> 
<a href="#"><?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='16'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image8=       $row['url'];
				  echo"<img src='".$image8." 'style='width:200px; height:150px;border:4px solid #669900;border-radius:15px;'/>";?><span id="sea">SEASONS</span></a></p>
<p id="wrapper3"> 
<a href="#"><?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='18'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image9=       $row['url'];
				  echo"<img src='".$image9." 'style='width:200px; height:150px;border:4px solid #669900;border-radius:15px;'/>";?><span id="ani">ANIMALS</span></a></p>
<p id="wrapper4"> 
<a href="#"><?php
                  include "connect.php";
                  $extract=mysql_query("SELECT * FROM images where img_id='17'");
                  $row = mysql_fetch_assoc($extract) or die(mysql_error());
                  $image10=       $row['url'];
				  echo"<img src='".$image10." 'style='width:200px; height:150px;border:4px solid #669900;border-radius:15px;'/>";?><span id="fru">FRUITS</span></a></p>
<!--p id="wrapper8"> 
<img src="letters.png"/></p>
<!--p id="wrapper9 "> 
<img src="numbers.png" style="width:20px;"/></p-->
</div>

<script>
$(document).ready(function(){
$("#wrapper1").click(function(){
  $("#data").hide();
  $("#stage").hide();
  $("#grades").hide();
 $("#wrapper").hide();
 $("#wrapper1").hide();
 $("#wrapper2").hide();
 $("#wrapper3").hide();
 $("#wrapper4").hide();
 $("#habit").hide();
  });
  });
  </script>
</body>
</html>