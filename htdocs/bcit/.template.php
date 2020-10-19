<?php // Get app context from the request and include site header functions and HTML
$serverScript = $_SERVER["SCRIPT_NAME"];$appName = substr($serverScript, 1);$slashPos = stripos($appName, "/");$appName = substr($appName, 0, $slashPos);$appURL = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . $appName;$appDir = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/";$include = $appDir . "/header.php";include $include;
// Page metadata, header HTML and <body> tag are automatic (in header.php)?>




<?php
$output = "";

echo $output;
?>

Put HTML content here.<br>






<?php // Include site footer
$footer = $appDir . "/footer.php";include $footer;?>
</body>
</html>