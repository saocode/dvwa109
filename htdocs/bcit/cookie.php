<?php
$include = $_SERVER["DOCUMENT_ROOT"] . "/demo/header.php";
include $include;
?>

<h1>
	Check a cookie...<br>
</h1>
<form action="tools/cookieTool.php" method="post">
	<p>
		<select name="cookie_name">
<?php
echo   "<option value=\"\">Select...</option><br>\r\n";
foreach ($_COOKIE as $key => $val) 
    echo "<option value=\"" . $key . "\">" . $key . "</option>" . "<br>\r\n";
?>
		</select> <br>
		<br>

<button class="w3-btn w3-white w3-border w3-border-red w3-round-large"
	type="submit">Check</button>
</p>
</form>


<h1>Set a cookie...</h1>
<form action="tools/setCookie.php" method="post">
	<p>
		Name:&nbsp <input type="text" name="cookie_name">
	</p>
	<p>
		Value:&nbsp <input type="text" name="cookie_value"> &nbsp
		<button class="w3-btn w3-white w3-border w3-border-red w3-round-large"
			type="submit">Set</button>
	</p>
</form>

<h1>
	Info...<br>
</h1>
<p>
<?php
// echo $_SERVER['SERVER_NAME'] . "<br>";
// echo "<br>";
// echo "Cookie check...<br>";
// echo "<br>";

$cookie_name = "user";
$cookie_value = "John Doe";

if (! isset($_COOKIE[$cookie_name])) {
    echo "Cookie  '" . $cookie_name . "' is not set!";
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    // echo "Cookie named '" . $cookie_name . "' is now set to " . $_COOKIE[$cookie_value];
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "<p>Value is: " . $_COOKIE[$cookie_name] . "<br>";
}
?>
</p>

<!-- <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p> -->



</body>
</html>