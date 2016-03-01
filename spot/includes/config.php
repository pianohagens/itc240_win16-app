<?php
/*
config.php

Provides a place to put all configuration info 
for our app

*/
include 'credentials.php';

define('DEBUG',true); #we want to see all errors

//THIS_PAGE is the name of the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['template.php'] = "Template";
$nav1['contact.php'] = "Contact Us";
$nav1['disclaimer.php'] = "Disclaimer";

//echo THIS_PAGE;
//die;

ob_start();//prevents header errors

switch(THIS_PAGE)
{
    case "index.php":
        $title = "Home page title";
        $pageID = "Home Page";
        break;
        
    case "template.php":
        $title = "Template page title";
        $pageID = "Template Page";
        break;        

    default:
        $title = THIS_PAGE;
        $pageID = "";

}

function makeLinks($ar)
{
    $myReturn = '';
    foreach($ar as $url => $label)
    {
        
        
        if($url == THIS_PAGE){
            echo '<li class="active"><a href="' . $url . '">' . $label . '</a></li>';
        }else{
            echo '<li><a href="' . $url . '">' . $label . '</a></li>';
        }
     
  
        
    
    }
    
  

    return $myReturn;
}
/*



<ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="index.html">HOME</a></li>
    <li><a href="about.html">ABOUT</a></li>
    <li><a href="services.html">SERVICES</a></li>
    <li><a href="works.html">WORKS</a></li>
    <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
</ul>


*/


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}

