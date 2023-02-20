<?php
/* strpos() - checking right way -- */

//strpos($haystack, $needle, ? $offset)

//01:
$name = "Tufik Hasan";
echo strpos( $name, 'T' ) . PHP_EOL;
echo strpos( $name, 'a', 8 ) . PHP_EOL;
//strpos() - important things
$str = "hello world";
$needle = "h";
$pos = strpos( $str, $needle );

if ( $pos ) {
    echo "'{$needle}' is present {$pos}\n";
} else {
    echo "'{$needle}' is not present\n";
}

// this is the right way to check
if ( $pos !== false ) {
    echo "'{$needle}' is present {$pos}\n";
} else {
    echo "'{$needle}' is not present\n";
}
