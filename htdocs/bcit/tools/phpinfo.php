<?php
$include = $_SERVER["DOCUMENT_ROOT"] . "/demo/header.php";
include $include;
?>

<?php
echo ini_get('max_execution_time') . "<br>";

$varname = 'max_execution_time';
$newvalue = '0';
ini_set($varname, $newvalue);
echo ini_get('max_execution_time') . "<br>";

$newvalue = '10';
ini_set($varname, $newvalue);
echo ini_get('max_execution_time') . "<br>";

$newvalue = '110';
ini_set($varname, $newvalue);
echo ini_get('max_execution_time') . "<br>";

$newvalue = '150';
ini_set($varname, $newvalue);
echo ini_get('max_execution_time') . "<br>";

ini_restore($varname);
echo ini_get('max_execution_time') . "<br>";

phpinfo();
?>

