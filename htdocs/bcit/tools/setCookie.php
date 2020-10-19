<?php
$include = $_SERVER["DOCUMENT_ROOT"] . "/demo/header.php";
include $include;
?>


<?php

$cookie_name = $_POST["cookie_name"];
$cookie_value = $_POST["cookie_value"];

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header("Location: ../index.php");



//if(!isset($_COOKIE[$cookie_name])) {

    //echo "Cookie named '" . $cookie_name . "' is not set!";
//    
//    echo "Cookie named '" . $cookie_name . "' is now set to " . $_COOKIE[$cookie_value];
// } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
// }

?>



</body>
</html>