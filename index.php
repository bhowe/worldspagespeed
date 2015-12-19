<?php


//https://developers.google.com/speed/docs/insights/v1/getting_started?hl=en

// use curl to read the page speed  - DONE
// read in json files and build a url list of the type sites in the world
// Read in pagespeed for each url in the list
// Average pasge speed
 // Track stats for images, JS, CSS HTML from each site to display in pie chart
// track page speed suggestsions such as leverage browser caching, minify JS and defering js and display pie chart

 
 
 
 
 
 $path = "./config/";
$temp_files = scandir($path);
var_dump($temp_files);
//$string = file_get_contents("/images/PartsCars/A/sample.json");
//$data = json_decode($string, true);

//natsort($temp_files);

exit;
echo "<table>";

/*foreach($temp_files as $file) 
{
    if($file != "." && $file != ".." && $file != "Thumbs.db" && $file != basename(__FILE__)) 
    {
        echo '<tr>';
        echo '<td><a href="'.$url.$file.'" title="'.$file.'"><img src="'.$url.$file.'" alt="" /></a></td>';
        $info = pathinfo($file);
        $file_name =  basename($file,'.'.$info['extension']);
        echo '<td>'.print_r(data['$file_name']).'</td>';
        echo '</tr>';
    }
}
echo '</table>';*/
 
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
  