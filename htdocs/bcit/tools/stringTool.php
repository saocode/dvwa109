<?php
$include = $_SERVER["DOCUMENT_ROOT"] . "/demo/header.php";
include $include;
?>



<?php

$function = $_POST["webFunction"];
$output = null;
switch ($function) {

    case "length":
        $string = $_POST["webText"];
        $output = "<p>PHP <b>strlen</b> thinks this string is ";
        $output .= strlen($string);
        $output .= " characters long.<br>";
        $output .= "<p>PHP <b>strlen + utf8_decode</b> thinks this string is ";
        $output .= strlen(utf8_decode($string));
        $output .= " characters long.";
        $output .= "<p>PHP <b>mb_strlen</b> thinks this string is ";
        $output .= mb_strlen($string);
        $output .= " characters long.";
        $output .= "<p>Javascript <b>length</b> thinks this string is <span id=\"jsLength\"></span> characters long.";
        $output .= //JS string length
        
"<body onload=\"jsStrLen()\">            
<script>
function jsStrLen() {
    str = \"" . $string . "\";
    len = str.length;
    span = document.getElementById(\"jsLength\");
    node = document.createTextNode(len);
    span.appendChild(node);
}
</script>";
         
        
        break;

    default:
        echo $_POST["webFunction"];
}


echo $output;





?>

<hr>
<form action="../encoding.php" method="post">
	<p>
		<button class="w3-btn w3-white w3-border w3-border-red w3-round-large"
			type="submit">Thanks!</button>

</form>
</body>
</html>