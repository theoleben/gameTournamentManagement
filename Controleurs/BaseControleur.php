<?php

namespace Controleurs;

abstract class BaseControleur
{
    public function dump( $variable )
    {
        echo "<pre>";
            echo print_r( $variable );
        echo "</pre>";
    }

    public function rendu( $vue, $parametresVue = [] )
    {
        extract( $parametresVue );
        include "vues/header.html.php";
        // include "vues/produit/liste.html.php";
        include $vue;
        include "vues/footer.html.php";
    }
}