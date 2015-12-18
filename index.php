<?php


//https://developers.google.com/speed/docs/insights/v1/getting_started?hl=en

// use curl to read the page speed  - DONE
// read in json files and build a url list of the type sites in the world
// Read in pagespeed for each url in the list
// Average pasge speed
 // Track stats for images, JS, CSS HTML from each site to display in pie chart
// track page speed suggestsions such as leverage browser caching, minify JS and defering js and display pie chart

  
  
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
  