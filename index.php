<?php
/* date($format,$timeStamp) - Some example

 * https://www.php.net/manual/en/function.date.php
 * https://www.geeksforgeeks.org/php-date-time/
 * https://www.w3schools.com/php/php_date.asp
 */

//----- week - day - month - year - Hour - Minute - second - AM/PM - Timezone ---
echo date( 'D-d-m-y g:i:s a e' ) . "\n"; //Mon-13-03-23 4:26:44 am UTC

echo date( 'N-jS-n-Y h:i:s A e' ) . "\n"; //1-13th-3-2023 04:29:46 AM UTC

echo date( 'l-j-M-Y G:i:s A e' ) . "\n"; //Monday-13-Mar-2023 4:26:19 AM UTC

echo date( 'w-dS-F-Y H:i:s A e' ) . "\n"; //1-13th-March-2023 04:30:51 AM UTC

//Current date +1 days
echo date( 'D-d-m-y g:i:s a e', time() + 24 * 60 * 60 ) . "\n"; //Tue-14-03-23 4:36:27 am UTC
