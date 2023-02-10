<?php
/**
 * Determines if the argument is Even or Odd
 * @param int $n
 * @return boolean
 *
 */
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}