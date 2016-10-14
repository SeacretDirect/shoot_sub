<?php

function shoot_sub_init_presets(){
	return 2;
}

function shoot_sub_preprocess_page(&$vars) {
	
	if ($_SERVER['HTTP_X_FORWARDED_FOR'])
	  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else
	  $ip   = $_SERVER['REMOTE_ADDR'];
	  
	function iptocountry($ip)
	{
	  $numbers = preg_split( "/\./", $ip); 
	 
	include("ip_files/".$numbers[0].".php");
	//include("ip_files/211.php");
	
	$code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);  
	
	//$code=(211 * 16777216) + (33 * 65536) + (131 * 256) + (193);  
	//echo $code2;   
	 
	  foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$country=$ranges[$key][1];
	            break;
	        }
        }
    }
	 
	  if ($country=="")
	  {
	    $country="unknown";
	  }
	 
	  return $country;
	}
	 
	$two_letter_country_code = iptocountry($ip);
  
  
	if ($two_letter_country_code == "KR")
	die();
	
	
}