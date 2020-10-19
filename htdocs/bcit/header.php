<?php
// Instructions:
// Put the app in a web server directory and request the directory by HTTP
// The web server should serve http(s)://server/directory/index.php
// When the server receives the request it will parse the following values...
// $serverScript is in this format: "directory/index.php"
$serverScript = $_SERVER["SCRIPT_NAME"];
// $appName is in this format: "directory"
$appName = substr($serverScript, 1);
$slashPos = stripos($appName, "/");
$appName = substr($appName, 0, $slashPos);
// appURL is in this format: "http(s)://server/directory"
$appURL = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . $appName;
// appDir is in this format: "C:/xampp/htdocs/directory"
$appDir = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/";
// This includes the helper functions from tools folder
$include = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/tools/helpers.php";
include $include;
//require __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<title>Steve's Demo Site</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $appURL?>/css/w3.css">
<link rel="stylesheet" href="<?php echo $appURL?>/css/w3-theme-black.css">
<link rel="stylesheet" href="<?php echo $appURL?>/css/steve.css">
<link rel="stylesheet" href="<?php echo $appURL?>/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript"
	src="<?php echo $appURL?>/js/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo $appURL?>/js/jquery.dataTables.min.js"></script>

<body id="body">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <div class="w3-dropdown-hover">
    <button class="w3-button" title="Notifications">Menu <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
<?php
// This routine automatically populates the "LIST" drop down with links
// Get files in same directory as this file
$directory = $appDir;
$menuArray = array();
if (is_dir($directory)) {
    if ($handle = opendir($directory)) {
        while (($file = readdir($handle)) !== FALSE) {
            $menuArray[] = $file;
        }
        closedir($handle);
    }
}
echo "<a href=\"$appURL/bcit-phpmyadmin\" target=\"_blank\" class=\"w3-bar-item w3-button\">PHP My Admin</a>\r\n";

echo "<a href=\"$appURL/dvwa\" target=\"_blank\" class=\"w3-bar-item w3-button\">Damn Vulnerable Web App</a>\r\n";
// Output each file as a hyperlink
foreach ($menuArray as $value) {
    // echo "<a href=\"" . $value . "\">" . $value . "</a><br>";
    $isDot = false;
    $isDir = false;
    if (ord($value) == 46)
        $isDot = true;
    $dir = $appDir . $value;
    $isDir = is_dir($dir);
    $isName = false;
    if ($value == "header.php") $isName = true;
    if ($value == "footer.php") $isName = true;
    if ($value == "index.php") $isName = true;
    if ($value == "template.php") $isName = true;
    if ($value == "composer.json") $isName = true;
    if ($value == "composer.lock") $isName = true;
    if ($value == "composer.phar") $isName = true;
    
    $info = pathinfo($value);
    if (isset ($info["extension"])){
    if ($info["extension"] == "json") $isName = true;
    if ($info["extension"] == "zip") $isName = true;
    }
    
    $suppress = $isDot || $isDir || $isName;
    if (!$suppress)
        echo "<a href=\"" . $appURL . "/" . $value . "\" class=\"w3-bar-item w3-button\">" . $value . "</a>\r\n";
}
echo "<!-- End of script -->";
?>
    </div>
  </div>

      <a href="<?php echo $appURL?>" class="w3-bar-item w3-button w3-hover-white">Home</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white">Top</a>
      <a href="#footer" class="w3-bar-item w3-button w3-hover-white">Bottom</a>


  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>
  <!-- End of Header -->
<div style="margin-top:50px">
<div class="w3-container">			
		
