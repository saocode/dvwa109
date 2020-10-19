<?php $serverScript = $_SERVER["SCRIPT_NAME"];$appName = substr($serverScript, 1);$slashPos = stripos($appName, "/");$appName = substr($appName, 0, $slashPos);$appURL = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . $appName;$appDir = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/";$include = $appDir . "/header.php";include $include;?>
<h1>AES Cryptography</h1>
<p>This tool will encrypt/decrypt using AES-CBC-256.</p>
<form action="tools/cryptoTool.php" method="post">
	<input type="hidden" name="webFunction" value="aes">
<?php

// HTML:
// <p>Enter Option: &nbsp <select name="webAction">

// PHP:
// echo "<option value=\"encrypt\">Encrypt</option>" . "\r\n";
// echo "<option value=\"decrypt\">Decrypt</option>" . "\r\n";

// HTML:
// </select><br>

?>
	
	
	<p>
		Enter Text: &nbsp <input type="text" name="webText" required>
	
	
	<p>
		Enter Key: &nbsp <input type="text" name="webKey" required>
	
	
	<p>
		Enter IV: &nbsp <input type="text" name="webIV" optional>
	
	
	<p>Enter Option: &nbsp 

		<input type="radio" name="webAction" value="encrypt" required> Encrypt &nbsp	<input type="radio" name="webAction" value="decrypt"> Decrypt
	
	
	<p>
		<button class="w3-btn w3-white w3-border w3-border-red w3-round-large"
			type="submit">Go</button>

</form>



<hr>
<h1>PBKDF2 Key Stretching</h1>
<form action="tools/cryptoTool.php" method="post">
	<input type="hidden" name="webFunction" value="pbkdf2">
	<p>
		Enter Password: &nbsp <input type="text" name="webPassword" required><br>
	
	
	<p>
		Key Length: &nbsp <input type="text" name="webLength" required><br>
	
	
	<p>
		Iterations: &nbsp <input type="text" name="webIterations" required><br>
	
	
	<p>
		<button class="w3-btn w3-white w3-border w3-border-red w3-round-large"
			type="submit">Go</button>

</form>

<?php
$footer = $appDir . "/footer.php";
include $footer;
?>
</body>
</html>