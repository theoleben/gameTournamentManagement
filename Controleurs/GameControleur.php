<?php

namespace Controleurs;

use Modeles\BDD;

class GameControleur extends BaseControleur
{
    public function addGame()
    {
        // echo"here <br>";
        // print_r( $_POST );

        // $this->dump( $_POST );

        if( $_POST )
        {
            // echo"here2";

            // BDD::insertGame( $_POST );

            // header('location:index.php?controleur=game&methode=displayGame');
            // exit;
        }

        return $this->rendu( "vues/game/form_game.html.php");
    }

    public function displayGame()
    {
        $games = BDD::getGames();

        // $this->dump( $players );

        return $this->rendu( "vues/game/liste_game.html.php", [ "games" => $games ]);
    }
}