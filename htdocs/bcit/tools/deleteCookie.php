<?php
$include = $_SERVER["DOCUMENT_ROOT"] . "/demo/header.php";
include $include;
?>


<?php

foreach ($_POST["webDelete"] as $cookieName) {



if (isset($_COOKIE[$cookieName])) {
    unset($_COOKIE[$cookieName]);
    setcookie($cookieName, '', time() - 3600, '/'); // empty value and old timestamp
}
}
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