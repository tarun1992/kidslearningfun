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
     
    //print_r($results_urls);
	// Printing out our array of URLs we've just scraped
    //print_r($name_urls);
	include "connect.php";
	$trun=mysql_query("TRUNCATE TABLE crawl_data");
	for($i=1;$i<5;$i++)
	{ 
	$write=mysql_query("INSERT INTO crawl_data VALUES('$results_urls[$i]','$name_urls[$i]')") or die(mysql_error());
	
	}
	$extra=mysql_query("SELECT * FROM crawl_data");
   echo "Story Time";
	while($row = mysql_fetch_assoc($extra))//assoc-means associative array which stores key and value
{
//$id=       $row['id'];
$name=$row['name'];
$link=$row['link'];
echo "<h4><a href='#'>$name</h4><h4><a href='$link'>$link</h4>";
echo "<br>";
} 

?>

     
    
     
    