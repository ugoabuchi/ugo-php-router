
<?php
//Created by Mathew fortune, contact me at mathewfortune54@gmail.com or call +2349083273485
session_start();
date_default_timezone_set("Africa/Lagos");
//you can require public libraries here
//example require "mylibrary.php";

$inRequest = $_SERVER['REQUEST_URI'];
$inRequest = substr($inRequest, 1);
$request = explode("?", $inRequest);
switch ($request[0]) {
    
    //content
	
	//specify home location
    case '' :
        //require __DIR__ . '/myhome.php';
        break;
   case 'home' :
        //require __DIR__ . '/myhome.php';
        break;
     //specify other urls, example
	 
	 /*
	 
	 case 'home.us' :
        //require __DIR__ . '/us.php';
        break;
	 case 'home.contact' :
        //require __DIR__ . '/contact.php';
        break;
	 
	  case 'user.product' :
        //require __DIR__ . '/product.php';
        break;
	 
	 */
   
    default:
	//specify 404 page location
       // require __DIR__ . '/404.php';
        break;
    
    
}


?>