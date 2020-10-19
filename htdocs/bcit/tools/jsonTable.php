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
$output = "";
$output .= "
<table id=\"table_1\" class=\"w3-hoverable\">
<thead>
<tr>
<th>Name</th>
<th>Value</th>

</thead>
        </tr>

<tbody>
";

    foreach ($cookieArr as $key => $value) {
        
            $output .= "
<tr>
<td>$key</td>
<td>$value</td>
";
            $output .= "
</tr>
";
        }
    

?>
<link rel="stylesheet" type="text/css"
	href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript"
	src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table_1').DataTable();
    });
</script>

<?php
echo $output;
echo "</tbody>
</table>";
?>

<?php $footer = $appDir . "/footer.php";include $footer;?>
</body>
</html>