<?php


//https://developers.google.com/speed/docs/insights/v1/getting_started?hl=en

// use curl to read the page speed  - DONE
//write script to pull top 500 sites from alexa.
//https://support.alexa.com/hc/en-us/articles/200450214-Is-Alexa-s-data-available-via-an-API-
//Need to create better json files
// Category -> name - URL
// read in json files and build a url list of the type sites in the world

// Read in pagespeed for each url in the list
// Average pasge speed
 // Track stats for images, JS, CSS HTML from each site to display in pie chart
// track page speed suggestsions such as leverage browser caching, minify JS and defering js and display pie chart

 
 
 
 
 
$path = "./config/";
$temp_files = scandir($path);


foreach($temp_files as $file) // grab all the files
{
    if($file != "." && $file != ".." && $file != "Thumbs.db" && $file != basename(__FILE__)) 
    {
	    
	    $string = file_get_contents( $path . $file );
	    
	    $data = json_decode($string);
	    
	    
	    
	    foreach($data->categories[0]->sites as $site) //parse out each site.
	    {
		    
		   
		   		 //do something with each domain
		   		 var_dump($site->domain);
		   		 echo "<br><br>";
		    
	    }
	    
    }
}
 
exit;

//lookup page speed params 
$myKEY = "AIzaSyDZTffMlHiwIPe0NPELYXy-TxPVLpAqDVE";  
$url = "http://wiseguystechnologies.com";  
$url_req = 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url='.$url.'&key='.$myKEY;  
$results = checkPageSpeed($url_req);  
echo '<pre>';  
print_r(json_decode($results,true));   
echo '</pre>  
';  
 
  
function checkPageSpeed($url){    
  if (function_exists('file_get_contents')) {    
    $result = @file_get_contents($url);    
  }    
  if ($result == '') {    
    $ch = curl_init();    
    $timeout = 60;    
    curl_setopt($ch, CURLOPT_URL, $url);    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);    
    $result = curl_exec($ch);    
    curl_close($ch);    
  }    
  
  return $result;    
}  
  