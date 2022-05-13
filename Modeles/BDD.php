<?php

namespace Modeles;
use PDO;
use Throwable;

abstract class BDD
{
    // Connexion à la BDD
    static public function pdo()
    {
        try
        {
            return new PDO('mysql:host=localhost;dbname=wf3_php_final_theo;charset=utf8', 'root', '',
            array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
                )
            );
        }
        catch(Throwable $th)
        {
            exit("Erreur de connexion <br>" . $th->getMessage());
        }
    }

    // Insertion d'un nouveau jeu
    static public function insertGame( array $donnees )
    {
        $pdo = self::pdo();

        extract( $donnees );

        // echo " title :" . $title;
        // echo " min_players :" . $min_players;
        // echo " max_players :" . $max_players;

        $pdostatement = $pdo->prepare("INSERT INTO game (title, min_players, max_players) VALUES (:title, :min_players, :max_players)" );

        $pdostatement->bindValue(":title", $title);
        $pdostatement->bindValue(":min_players", $min_players);
        $pdostatement->bindValue(":max_players", $max_players);

        return $pdostatement->execute();
    }

    // Insertion d'un nouveau joueur
    static public function insertPlayer( array $donnees )
    {
        $pdo = self::pdo();

        extract( $donnees );

        // echo " email :" . $email;
        // echo " nickname :" . $nickname;

        $pdostatement = $pdo->prepare("INSERT INTO player (email, nickname) VALUES (:email, :nickname)" );

        $pdostatement->bindValue(":email", $email);
        $pdostatement->bindValue(":nickname", $nickname);

        return $pdostatement->execute();
    }

    // Insertion d'un nouveau joueur
    static public function insertContest( array $donnees )
    {
        $pdo = self::pdo();

        extract( $donnees );

        echo " game_id :" . $game_id;
        echo " start_date :" . $start_date;
        echo " winner_id :" . $winner_id;

        $pdostatement = $pdo->prepare("INSERT INTO contest (game_id, start_date, winner_id) VALUES (:game_id, :start_date, :winner_id)" );

        $pdostatement->bindValue(":game_id", $game_id);
        $pdostatement->bindValue(":start_date", $start_date);
        $pdostatement->bindValue(":winner_id", $winner_id);

        return $pdostatement->execute();
    }

    // Récupération des jeux dans la table games pour afficher l'identifiant
    static public function getGames()
    {
        $pdostatement = self::pdo()->query("SELECT * FROM game");

        if( $pdostatement )
        {
            $games = $pdostatement->fetchAll( PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst("game") );
            
            // print '<pre>';
            //     print_r( $games );
            // print '<pre>';

            return $games;
        }
    }

    // Récupération de l'id du jeu sélectionné
    static public function selectOneContestId( $game_id )
    {
        $pdostatement = self::pdo()->query("SELECT * FROM contest WHERE game_id = $game_id");

        if( $pdostatement )
        {
            $classeEntite = "Modeles\Entites\\" . ucfirst( "contest" );
            $pdostatement->setFetchMode( PDO::FETCH_CLASS, $classeEntite );
            return $pdostatement->fetch();
        }
    }

    // Récupération de tous les joueurs ayant joué au jeu pour sélection l'identifiant du gagnant
    static public function getPlayerContest( $id )
    {
        $pdostatement = self::pdo()->query("SELECT * FROM player_contest WHERE contest_id=$id");

        if( $pdostatement )
        {
            $games = $pdostatement->fetchAll( PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst("player_contest") );
            
            // print '<pre>';
            //     print_r( $games );
            // print '<pre>';

            return $games;
        }
    }

    // Récupération de tous les joueurs
    static public function getPlayer()
    {
        $pdostatement = self::pdo()->query("SELECT * FROM player");

        if( $pdostatement )
        {
            $players = $pdostatement->fetchAll( PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst("player") );

            return $players;
        }
    }

    // Récupération d'un jeu précis
    static public function selectOneGame( $id )
    {
        $pdostatement = self::pdo()->query("SELECT * FROM game WHERE id = $id");

        if( $pdostatement )
        {
            $classeEntite = "Modeles\Entites\\" . ucfirst( "game" );
            $pdostatement->setFetchMode( PDO::FETCH_CLASS, $classeEntite );
            return $pdostatement->fetch();
        }
    }

    // Récupération des matchs
    static public function getContests()
    {
        $pdostatement = self::pdo()->query("SELECT * FROM contest ORDER BY start_date DESC");

        if( $pdostatement )
        {
            $games = $pdostatement->fetchAll( PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst("contest") );
            
            return $games;
        }
    }

    // Récupération d'un jeu précis
    static public function selectWinner( $id )
    {
        $pdostatement = self::pdo()->query("SELECT * FROM player WHERE id = $id");

        if( $pdostatement )
        {
            $classeEntite = "Modeles\Entites\\" . ucfirst( "player" );
            $pdostatement->setFetchMode( PDO::FETCH_CLASS, $classeEntite );
            return $pdostatement->fetch();
        }
    }
}
