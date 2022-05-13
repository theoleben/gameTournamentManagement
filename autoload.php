<?php

function chargementClasses($classe)
{
    $classe = str_replace( "\\", "/", $classe );

    require "$classe.php";
}

spl_autoload_register("chargementClasses");