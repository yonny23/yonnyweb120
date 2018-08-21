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
        $title= 'Yonnys Web120 Title Page';
        $logo = 'fa-home';
        $PageID = 'Welcome';

    break; 
        
        case 'flexbox.php':
        $title = "Yonatan's Flexbox Research";
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
        case 'galleries.php':
        $title = "Yonatan's Gallery Research";
        $logo = '';
        $PageID = 'Gallery Research';
    break;
        
        case 'map.php':
        $title = "Yonatan's Google Map";
        $logo = '';
        $PageID = 'Contact Yonatan';
    break;
        
        case 'calendar.php':
        $title = "Yonny's Event";
        $logo = '';
        $PageID = 'Yonnys Event Calendar';
    break;
        
        case 'youtube.php':
        $title = "Yonatan's Videos ";
        $logo = '';
        $PageID = 'SEO Optimization';
    break;
        
        case 'parallax.php':
        $title = "Yonatan's Parallax Research";
        $logo = '';
        $PageID = 'Parallax Research';
    break;

        case 'shoppingcarts.php':
        $title = "Yonatan's Shopping Cart Research";
        $logo = '';
        $PageID = 'Shopping Cart Research';
    break;
        
        case 'siteapp.php':
        $title = "Yonatan's Responsive Website Vs. Native mobile Apps";
        $logo = '';
        $PageID = 'Responsive Website vs Native Mobile App';
    break;
        
        case 'webcam.php':
        $title = "Yonatan's Webcam Example";
        $logo = '';
        $PageID = 'Live Feed';
    break;
        
    
    default:
        $title = THIS_PAGE; 
        $logo = 'fa-home';
        $PageID = 'Welcome';

}







