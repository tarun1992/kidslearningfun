<html>
<head>


<link href= "strytime.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br>
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
	       <li><a href="?view=english">
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



<div id="image">
<img src="strytime.png" width="500px" height="200px" style="margin-left:350px;margin-top:90px;"/>
<div style="margin-left:-250px;margin-right:500px;">
<?php  

      
    // Defining the basic cURL function
     function curl($url) {
        $ch = curl_init();  // Initialising cURL
        curl_setopt($ch, CURLOPT_URL, $url);    // Setting cURL's URL option with the $url variable passed into the function
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Setting cURL's option to return the webpage data
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL
        return $data;   // Returning the data from the function
    }

	 $url = "http://www.storynory.com/archives/";    // Assigning the URL we want to scrape to the variable $url
    $results_page = curl($url); // Downloading the results page using our curl() funtion
	function scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }
	
	    //$scraped_data = scrape_between($scraped_page, "<title>", "</title>");   // Scraping downloaded dara in $scraped_page for content between <title> and </title> tags
     $results_page1 = scrape_between($results_page, "<div id=\"col3\">" , "</div>");// Scraping out only the middle section of the results page that contains our results
     // $results_page2 = scrape_between($results_page, "<div id=\"col3\">	" , "</div>");
   // echo $scraped_data; // Echoing $scraped data, should show "The Internet Movie Database (IMDb)"
   $separate_results1 = explode('<li><h4>Latest Stories</h4></li>', $results_page1);   // Expploding the results into separate parts into an array    
    //$separate_results2 = explode('<li><h4>Latest Stories</h4></li>', $results_page1); 
	// For each separate result, scrape the URL
	$results_urls= array();
	$name_urls= array();
    foreach ($separate_results1 as $separate_result1) {
        if ($separate_result1 != "") {
            $results_urls[] = scrape_between($separate_result1, "<li><a href=\"", "\">"); // Scraping the page ID number and appending to the IMDb URL - Adding this URL to our URL array
            $name_urls[]= scrape_between($separate_result1, "\">","</a></li>");
		}
    }
	/*foreach ($separate_results2 as $separate_result2) {
        if ($separate_result2 != "") {
            $results_urls[] = scrape_between($separate_result2, "<li><a href=\"", "\">"); // Scraping the page ID number and appending to the IMDb URL - Adding this URL to our URL array
            $name_urls[]= scrape_between($separate_result2, "\">","</a></li>");
		}
    }*/
     
   // print_r($results_urls);
	// Printing out our array of URLs we've just scraped
   // print_r($name_urls);
	include "connect.php";
	//$trun=mysql_query("TRUNCATE TABLE crawl_data");
	//error_reporting(E_PARSE);
	$trun=mysql_query("TRUNCATE TABLE crawl_data");
	for($i=1;$i<5;$i++)
	{ 
	$write=mysql_query("INSERT INTO crawl_data VALUES('$results_urls[$i]','$name_urls[$i]')") or die(mysql_error());
	
	}
	$extra=mysql_query("SELECT * FROM crawl_data");

	while($row = mysql_fetch_assoc($extra))//assoc-means associative array which stores key and value
{
//$id=       $row['id'];
$name=$row['name'];
$link=$row['link'];
echo "<div id='wcrawl' style='border:2px solid blue;border-radius:20px;text-align:center;font-family:cursive;'><h4 id='namm'>$name</h4><h4 id='linkk'><a href='$link'>$link</a></h4></div>";
echo "<br>";
} 

?>
</div>
     
   
<div id="stage" style="width: 120px; height: 120px; margin-top:-1050px;margin-left:50px;">
<div id="spinner" style="margin-left:1000px;margin-top:200px;">
<div class='face1'><img src='str1.jpg' width='120px' height='120px' style='margin-left:0px;'/></div>
<div class='face2'><img src='str2.jpg' width='120px' height='120px' style='margin-left:0px;'/></div>
<div class='face3'><img src='str3.jpg' width='120px' height='120px' style='margin-left:0px;'/></div>
<div class='face4'><img src='str5.jpg' width='120px' height='120px' style='margin-left:0px;'/></div>
<div class='face5'><img src='str6.jpg' width='120px' height='120px' style='margin-left:0px;'/></div>
<div class='face6'><img src='str7.jpg' width='120px' height='120px' style='margin-left:0px;'/></div>
</div>
</div>

 <!--?php
  echo "<div id='image'><img src='strytime.png' width='500px' height='200px' style='margin-left:350px;margin-top:-180px;'/>";
  echo"<div id='stage' style='width: 120px; height: 120px;'>
<div id='spinner' style='margin-left:1000px;margin-top:200px;'>
<div class='face1'><img src='str1.jpg' width='110px' height='110px' style='margin-left:0px;'/></div>
<div class='face2'><img src='str2.jpg' width='110px' height='110px' style='margin-left:0px;'/></div>
<div class='face3'><img src='str3.jpg' width='110px' height='110px' style='margin-left:0px;'/></div>
<div class='face4'><img src='str5.jpg' width='110px' height='110px' style='margin-left:0px;'/></div>
<div class='face5'><img src='str6.jpg' width='110px' height='110px' style='margin-left:0px;'/></div>
<div class='face6'><img src='str7.jpg' width='110px' height='110px' style='margin-left:0px;'/></div>
</div>
</div>";
  ?-->

     
    
</body>
</html>