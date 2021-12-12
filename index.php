<?php
// Jason Brillante "Damdoshi"
// Hanged Bunny Studio 2014-2020
//
// Hanged Bunny Studio . Com

require_once ("./tools/mobile.php");

if (($IsMobile = (new Mobile_Detect())->isMobile()))
    $Ext = "_mobile";
else
    $Ext = "_pc";

if (file_exists("./configuration.php"))
{
    require_once ("./configuration.php");
    unset ($ReCaptchaKeyPrivateKey);
}
else
{
    echo "No website set.";
    die ();
}

require_once ("./tools/utils.php");
require_once ("./tools/ip.php");
require_once ("./tools/carousel.php");

require_once ("./dictionnary.php");
require_once ("./src/main.php");
