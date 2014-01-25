<?php

// main file for stylesheet to include
// Special behaviour according to IE istreated.

echo ' <link rel="stylesheet" href="css/stylesheet.css" type="text/css"> ';

if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')!==FALSE){
    //Microsoft internet explorer is used
    echo ' <link rel="stylesheet" href="css/stylesheet_msie.css" type="text/css"> ';
    }
    
?>