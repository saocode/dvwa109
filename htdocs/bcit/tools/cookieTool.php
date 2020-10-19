<?php
$include = $_SERVER["DOCUMENT_ROOT"] . "/demo/header.php";
include $include;
?>


<p>
Cookie check...<br>
<br>

<?php

$cookie_name = $_POST["cookie_name"];

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
}
?>

<br>
<form 
	action="../cookie.php"
	method="post"
>
<p><button 
	type="submit" 
	class="w3-btn w3-white w3-border w3-border-red w3-round-large"
	>
Thanks!
</button></form>

</body>
</html>