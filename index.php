<?php

/******* Alternative Syntax of switch Statement ********/

$string = "8balls";
switch ($string):
   case (string)"9balls";
      echo "9balls";
      break;
   case (string)8;
      echo "8";
      break;
   case (string)"8balls";
      echo "8balls";
      break;
endswitch;

echo "\n";

switch (date('D')):
   case "Sun":
      echo "Sunday";
      break;
   case "Mon":
      echo "Monday";
      break;
   case "Tue":
      echo "Tuesday";
      break;
   case "Wed":
      echo "Wednesday";
      break;
   case "Thu":
      echo "Thursday";
      break;
   case "Fri":
      echo "Friday";
      break;
   case "Sat":
      echo "Saturday";
endswitch;
