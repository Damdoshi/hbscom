<?php

function safe_upper($str)
{
    $str = str_replace("é", "e", $str);
    $str = str_replace("è", "e", $str);
    $str = str_replace("ê", "e", $str);
    $str = str_replace("à", "a", $str);
    return (strtoupper($str));
}
