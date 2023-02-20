<?php
/* strpos() - checking right way -- */

//strpos() - important things
$str = "hello world";
$needle = "h";
$pos = strpos($str, $needle);

if ($pos) {
    echo "'{$needle}' is present {$pos}\n";
} else {
    echo "'{$needle}' is not present\n";
}

// this is the right way to check
if ($pos !== false) {
    echo "'{$needle}' is present {$pos}\n";
} else {
    echo "'{$needle}' is not present\n";
}
