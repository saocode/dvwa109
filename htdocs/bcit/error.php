<?php $serverScript = $_SERVER["SCRIPT_NAME"];$appName = substr($serverScript, 1);$slashPos = stripos($appName, "/");$appName = substr($appName, 0, $slashPos);$appURL = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . $appName;$appDir = $_SERVER["DOCUMENT_ROOT"] . "/" . $appName . "/";$include = $appDir . "/header.php";include $include;?>
<div class="blink_me">
<pre>                                                
███████╗██████╗ ██████╗  ██████╗ ██████╗ 
██╔════╝██╔══██╗██╔══██╗██╔═══██╗██╔══██╗
█████╗  ██████╔╝██████╔╝██║   ██║██████╔╝
██╔══╝  ██╔══██╗██╔══██╗██║   ██║██╔══██╗
███████╗██║  ██║██║  ██║╚██████╔╝██║  ██║
╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
                                         

</pre>                
</div>                                
<?php $footer = $appDir . "/footer.php";include $footer;?></body></html>