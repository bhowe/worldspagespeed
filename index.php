<?php

//https://github.com/yosymfony/toml
use Yosymfony\Toml\Toml;

//todos

//DB schema
// buold tables
// get TOML confoigurationw working
// test API lib



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


//$path = "./config/";
//$temp_files = array_diff(scandir($path), array('.', '..')); ///cleans up . and .. crap


//get t

$array = Toml::ParseFile('./config/app_config.toml');

print_r($array);

foreach($temp_files as $file) // grab all the files
{
  
  //echo $file;
  //echo "<br><br>";
  

  
  	    $string = file_get_contents( $path . $file );
  
  	    $data = json_decode($string);

	    foreach($data->categories[0]->sites as $site) //parse out each site.
	    {
          $url = $site->domain;
          $url_req = 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url='.$url.'&key='.$myKEY;
          
          echo $url_req . "<br><br>";
          $results = checkPageSpeed($url_req);
          $page_speed_json = json_decode($results,true);
          echo '<pre>';
          echo $page_speed_json['score'];
          print_r(json_decode($results,true));
          flush_buffers();
          echo '</pre>';
          
         exit;
	    }

    
}


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

function flush_buffers()
{
    ob_end_flush();
    flush();
    ob_start();
}

//generate a function  to read TOML config file



function readConfig($file) {
  $config = file_get_contents($file);
  $config = json_decode($config, true);
  return $config;
}
