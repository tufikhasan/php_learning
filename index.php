<?php
/* ********************* Printing Fibonacci Series Using Recursive Functions */

//01:
function fibonacci( $old, $new, $start, $end ) {
    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . ", ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci( $old, $new, $start, $end );

}
fibonacci( 0, 1, 1, 10 );

echo PHP_EOL;

//02:
function fibonacci2( $old, $new, $end ) {
    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }

    $start++;

    echo $old . ", ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci2( $old, $new, $end );

}
fibonacci2( 0, 1, 10 );
