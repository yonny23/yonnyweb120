<?php

/* 
portal-config.php 

Used to Store all our WEB120 configuration information 


*/

//echo basename ($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF'])); 

//echo THIS_PAGE; 

//die;

switch(THIS_PAGE){
        
    case 'index.php':
        $title= 'Chef Liao';
        $logo = 'fa-home';
        $PageID = 'Welcome';

    break; 
        
        case 'contactgrease.php':
        $title = "Chef Liao Fine Dining Asian Cuisine";
        $logo = 'fa-pencil-square-o';
        
    break;

        
    default:
        $title = THIS_PAGE; 
        $logo = 'fa-home';
        $PageID = 'Welcome';

}

$nav1['http://yonnythegreat.com/web120/'] = "Main Page";
$nav1['index.php'] = "Welcome";
$nav1['contactgrease.php'] = "Contact Us";
$nav1['menu.php'] = "Grub!!";
$nav1['faq.php'] = "Frequently Asked Questions";





function makeLinks($nav1) {
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}

    
?>