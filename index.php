<?php
/* Reversing strings */

$name = "Tufik Hasan";

$len = strlen( $name );
//01:
for ( $i = 1; $i <= $len; $i++ ) {
    echo $name[$i * -1];
}

echo "\n";

//02:
for ( $i = $len - 1; $i >= 0; $i-- ) {
    echo $name[$i];
}

echo "\n";

//03:
echo strrev( $name );

echo "\n";

//word reverse
$strArr = explode( " ", $name );
foreach ( $strArr as $value ) {
    $wLen = strlen( $value );
    for ( $i = $wLen - 1; $i >= 0; $i-- ) {
        echo $value[$i];
    }
    echo " ";
}
