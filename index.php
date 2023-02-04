<?php

/******* Alternative Syntax - If...else...elseif *******/

$condition1 = true;
$condition2 = true;
$condition3 = true;

//Nested - If...else
if ($condition1) :
    if ($condition2) :
        if ($condition3) :
            echo "All condition true\n";
        else :
            echo "Condition 3 not found \n";
        endif;
    else :
        echo "Condition 2 not found \n";
    endif;
else :
    echo "Condition 1 not found \n";
endif;


//If...else...elseif
if ($condition1 && $condition2 && $condition3) :
    echo "All condition true\n";
elseif ($condition1 && $condition2) :
    echo "Condition 3 not found \n";
elseif ($condition1) :
    echo "Condition 2 not found \n";
else :
    echo "Condition 1 not found \n";
endif;
