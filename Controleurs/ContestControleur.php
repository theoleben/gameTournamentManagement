<?php

namespace Controleurs;

use Modeles\BDD;

class ContestControleur extends BaseControleur
{
    public function addContest()
    {        
        // echo"here <br>";
        // print_r( $_POST );

        // $this->dump( $_POST );

        // if( $_POST )
        // {
        //     echo"here2";

            // BDD::insertContest( $_POST );
            // $games = BDD::getGames();

            // $this->dump( $games );
        // }

        // 

        if( empty($_POST) )
        {
            // Récupération de tous les jeux pour sélectionner un id précis
            $games = BDD::getGames();

            $rendu = $this->rendu( "vues/contest/form_contest.html.php", [ "games" => $games ] );

            return $rendu;
        }
        else if( isset( $_POST['start_date'] ) && isset( $_POST['winner_id'] ) &&  isset( $_POST['game_id'] ))
        {
            // echo "Insertion BDD";

            // BDD::insertContest( $_POST );

            // header('location:index.php?controleur=contest&methode=displayContest');
            // exit;
            $games = BDD::getGames();

            $_POST = [];

            // unset($_POST);
            // $this->dump( $_POST );
            $rendu = $this->rendu( "vues/contest/form_contest.html.php", [ "games" => $games ] );

            return $rendu;
        }
        else if( isset( $_POST['game_id'] ) )
        {
            $contest = BDD::selectOneContestId( $_POST['game_id'] );
            // $this->dump( $contest );

            if( $contest )
            {
                // echo " id : " . $contest->getId();

                $playersContest = BDD::getPlayerContest( $contest->getId() );
                // $this->dump( $playersContest );

                $rendu = $this->rendu( "vues/contest/form_contest.html.php", 
                                        [ "id_game" => $_POST['game_id'], 
                                        "playersContest" => $playersContest ]
                                        );

                return $rendu;
            }
            else
            {
                include "vues/header.html.php";

                ?>
                <h1 style='text-align: center' class='mt-3'>Ajouter un match</h1>
                <div class='container'>
                <div class='row'>
                <div class='col-md-6 mx-auto mt-3'>
                <p class='alert alert-danger text-center' role='alert'>Il n'y a eu aucun match sur le jeu que vous avez sélectionné</p>
                </div>
                </div>
                </div>
                
                <?php

                include "vues/footer.html.php";
            }
        }
    }

    public function displayContest()
    {
        $contests = BDD::getContests();

        // $this->dump( $contests );

        // $game = BDD::selectOneGame( 25 );

        // $this->dump( $game );

        // $player = BDD::selectWinner( 3 );

        // $this->dump( $player );

        return $this->rendu( "vues/contest/liste_contest.html.php", [ "contests" => $contests ] );
    }

    public function displayContestDetails( $id )
    {
        //Récupération des joueurs du match
        $players = BDD::getPlayerContest( $id );
        // $this->dump( $players );

        return $this->rendu( "vues/contest/liste_detailsContest.html.php", [ "players" => $players ] );
    }
}