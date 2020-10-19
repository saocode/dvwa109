<?php // Get app context from the request and include site header functions and HTML
$serverScript = $_SERVER["SCRIPT_NAME"];$appName = substr($serverScript, 1);$slashPos = stripos($appName, "/");$appName = substr($appName, 0, $slashPos);$appURL = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . $appName;$appDir = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/";$include = $appDir . "/header.php";include $include;
// Page metadata, header HTML and <body> tag are automatic (in header.php)?>




<?php
$output = "";

echo $output;
?>


<script>
$(document).ready(function() {
    $('#cookieTable').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        "scrollX": true,
    } );
} );
</script>

<ul>
<?php
$cookieArr = $_COOKIE;

function checkboxBlank(string $string)
{
    return "<label class=\"w3-display-container\"><input  class=\"\" name=\"webDelete[]\" value=\"$string\" type=\"checkbox\"><span></span></label>\r\n";
}

$cookieTable = "";
$cookieTable .= "
<table id=\"cookieTable\" class=\"w3-hoverable\" >
<thead>
<tr>
<th></th>
<th style=\"text-align:left; padding-left:-10px;\">Name</th>
<th style=\"text-align:left\">Value</th>
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
<td class=\"steve-td\">$key</td>
<td class=\"steve-td\">$value</td>
";
    $cookieTable .= "
</tr>
";
}

echo $cookieTable;
?>
</ul>




<?php // Include site footer
$footer = $appDir . "/footer.php";include $footer;?>
</body>
</html>