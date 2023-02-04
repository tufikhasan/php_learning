<?php

/******* PHP version-8 & below version-8 Interesting issue with switch case
 * If PHP version 8 this example -- {RETURN: 8balls}
 * If PHP version below 8 this example -- {RETURN: 8}
 ********/

//PHP version 8 - (RETURN: 8balls) 
//Below PHP 8 version - (RETURN: 8)
 $string = "8balls";
 switch($string){
    case "9balls";
    echo "9balls";
    break;
    case 8;
    echo "8";
    break;
    case "8balls";
    echo "8balls";
    break;
 }
echo "\n";

//PHP version 8 - (RETURN: 8balls)
//Solve: Below PHP 8 version - (RETURN: 8balls)
 $string = "8balls";
 switch($string){
    case (string)"9balls";
    echo "9balls";
    break;
    case (string)8;
    echo "8";
    break;
    case (string)"8balls";
    echo "8balls";
    break;
 }