<?php
// // 01: Cookies Set PHP and Showing using javaScript 
// setcookie('name', 'tufik', time() + 30);
// echo <<<EOD
//     <script src="
//     https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js
//     "></script>
//     <script>
//         alert(Cookies.get('name'));
//     </script>
// EOD;

// 02: cookie array set like this
setcookie("array[id]", 1, time() + 30);
setcookie("array[name]", 'Tufik Hasan', time() + 30);
foreach ($_COOKIE['array'] as $key => $value) {
    echo "$key: $value<br>";
}
