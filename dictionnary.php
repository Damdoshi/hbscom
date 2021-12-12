<?php

$Glob = glob("./languages/*.php");
$Languages = [];
$Dictionnary = [];
foreach ($Glob as $index => $dir) {
    require_once ($dir);
}

if (!count($Languages))
    die ("Incomplete website");

if (isset($_GET["Language"]))
{
    setcookie("Language", $_GET["Language"], time() + 60 * 60 * 24 * 365);
    $Language = $_GET["Language"];
}
else if (isset($_COOKIE["Language"]))
    $Language = $_COOKIE["Language"];
else if (isset($DefaultLanguage) && strlen($DefaultLanguage))
    $Language = $DefaultLanguage;
else
    $Language = array_key_first($Languages);

$LanguageSign = $Language;
$Language = $Languages[$LanguageSign];
$Dictionnary = $Dictionnary[$LanguageSign];

