<?php

namespace Modeles\Entites;

use Modeles\BDD;

class Contest
{
    private $id;
    private $game_id;
    private $start_date;
    private $winner_id;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of game_id
     */ 
    public function getGame_id()
    {
        return $this->game_id;
    }

    /**
     * Set the value of game_id
     *
     * @return  self
     */ 
    public function setGame_id($game_id)
    {
        $this->game_id = $game_id;

        return $this;
    }

    /**
     * Get the value of start_date
     */ 
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * Set the value of start_date
     *
     * @return  self
     */ 
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get the value of winner_id
     */ 
    public function getWinner_id()
    {
        return $this->winner_id;
    }

    /**
     * Set the value of winner_id
     *
     * @return  self
     */ 
    public function setWinner_id($winner_id)
    {
        $this->winner_id = $winner_id;

        return $this;
    }


    // Récupération du jeu en question
    public function getGameName() : Game
    {
        $game = BDD::selectOneGame( $this->game_id );

        return $game;
    }

    // Recupération du pseudo du joueur
    public function getPseudoWinner() : Player
    {
        $player = BDD::selectWinner( $this->winner_id );

        return $player;
    }
}