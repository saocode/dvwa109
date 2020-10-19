<?php
// Get app context from the request and include site header functions and HTML
$serverScript = $_SERVER["SCRIPT_NAME"];
$appName = substr($serverScript, 1);
$slashPos = stripos($appName, "/");
$appName = substr($appName, 0, $slashPos);
$appURL = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . $appName;
$appDir = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/";
$include = $appDir . "/header.php";
include $include;
// Page metadata, header HTML and <body> tag are automatic (in header.php) ?>



<?php
$cookieArr = $_COOKIE;

function checkboxBlank(string $string)
{
    return "<label class=\"w3-display-container\"><input  class=\"padding-bottom:1px\" name=\"webDelete[]\" value=\"$string\" type=\"checkbox\"><span></span></label>\r\n";
}

?>
<ul
	class="w3-ul w3-border w3-left w3-hover-shadow w3-margin-right  w3-margin-bottom"
	style="max-width: 47%"
>
	<li class="w3-black w3-xlarge w3-padding-32">Cookies</li>
	<li class="w3-padding-16"><h2>Set a Cookie:</h2>
		<form
			action="tools/setCookie.php"
			method="post"
		>
			<input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Cookie Name"
				name="cookie_name"
				required
			> <input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Cookie Value"
				name="cookie_value"
				required
			>
			<button
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-border-red w3-round-large"
				type="submit"
			>Set</button>
		</form></li>

<?php
$deleteForm = "
<div class=\"\">
<form class=\"\" action=\"tools/deleteCookie.php\" method=\"post\">
";
echo $deleteForm;
?>
 	
	<li class="w3-padding-16"><h2>Current Cookies:</h2>    

<?php
$cookieArr = $_COOKIE;
$cookieTable = "";
$cookieTable .= "
<table id=\"cookieTable\" class=\"w3-hoverable\">
<thead>
<tr>
<th></th>
<th>Name</th>
<th>Value</th>

</thead>
        </tr>

<tbody>
";

foreach ($cookieArr as $key => $value) {

    $cookieTable .= "
<tr>
<td>";
    $cookieTable .= checkboxBlank($key);
    $cookieTable .= "</td>
<td>$key</td>
<td>$value</td>
";
    $cookieTable .= "
</tr>
";
}

echo $cookieTable;

$deleteFormEnd = "
</tbody>
</table>
<button 
class=\"w3-margin-top w3-block w3-btn w3-white w3-border w3-border-red w3-round-large\" 
type=\"submit\">Delete Selected</button>
</form>";
echo $deleteFormEnd;
?>
<script>
$(document).ready(function() {
    $('#cookieTable').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        "scrollX": true,
        "searching": false,
    } );
} );
</script></li>
</ul>
<ul
	class="w3-ul w3-border w3-left w3-hover-shadow w3-quarter w3-margin-bottom  w3-margin-right"
	style="width: 47%"
>
	<li class="w3-black w3-xlarge w3-padding-32">AES</li>
	<li class="w3-padding-16">
		<h2 class="">Cipher/Decipher:</h2>
		<form
			action="tools/cryptoTool.php"
			method="post"
		>
			<input
				type="hidden"
				name="webFunction"
				value="aes"
			> <input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Enter Text"
				name="webText"
				required
			> <input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Enter Key"
				name="webKey"
				required
			> <input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Enter IV"
				name="webIV"
				optional
			>
			<div
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
			>
				<input
					type="radio"
					name="webAction"
					value="encrypt"
					required
				> Encrypt &nbsp&nbsp&nbsp&nbsp <input
					type="radio"
					name="webAction"
					value="decrypt"
				> Decrypt
			</div>
			<button
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-border-red w3-round-large"
				type="submit"
			>Submit</button>
		</form>
	</li>
	
		<li class="w3-black w3-xlarge w3-padding-32">Hash</li>
	<li class="w3-padding-16">
		<h2 class="">Message:</h2>
		<form
			action="tools/cryptoTool.php"
			method="post"
		>
			<input
				type="hidden"
				name="webFunction"
				value="hash"
			> <input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Enter Text"
				name="webText"
				required
			> <input
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
				type="text"
				placeholder="Enter Salt"
				name="webSalt"
				
			> 
<h2><label for="webAlgo">Choose a Hash Algorithm:</label></h2><br>
<select name="webAlgo" 
class="w3-margin-top w3-block w3-btn w3-white w3-border w3-round-large"
id="webAlgo">
  <option value="md5">md5</option>
  <option value="sha256">sha256</option>
  <option value="crc32">crc32</option>
  required
</select>


			<button
				class="w3-margin-top w3-block w3-btn w3-white w3-border w3-border-red w3-round-large"
				type="submit"
			>Submit</button>
		</form>
	</li>
</ul>
<?php
print_r(hash_algos());
// Include site footer
$footer = $appDir . "/footer.php";
include $footer;
?>
