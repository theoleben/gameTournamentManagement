<?php

namespace Controleurs;

use Modeles\BDD;

class PlayerControleur extends BaseControleur
{
    public function addPlayer()
    {
        // echo"here <br>";
        // print_r( $_POST );

        // $this->dump( $_POST );

        if( $_POST )
        {
            // echo"here2";

            // BDD::insertPlayer( $_POST );

            // header('location:index.php?controleur=player&methode=displayPlayer');
            // exit;
        }

        return $this->rendu( "vues/player/form_player.html.php");
    }

    public function displayPlayer()
    {
        $players = BDD::getPlayer();

        // $this->dump( $players );

        return $this->rendu( "vues/player/liste_player.html.php", [ "players" => $players ]);
    }
}