<?php

namespace Modeles\Entites;

use Modeles\BDD;

class Player_contest
{
    private $id;
    private $player_id;
    private $contest_id;

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
     * Get the value of player_id
     */ 
    public function getPlayer_id()
    {
        return $this->player_id;
    }

    /**
     * Set the value of player_id
     *
     * @return  self
     */ 
    public function setPlayer_id($player_id)
    {
        $this->player_id = $player_id;

        return $this;
    }

    /**
     * Get the value of contest_id
     */ 
    public function getContest_id()
    {
        return $this->contest_id;
    }

    /**
     * Set the value of contest_id
     *
     * @return  self
     */ 
    public function setContest_id($contest_id)
    {
        $this->contest_id = $contest_id;

        return $this;
    }

    public function getPlayer() : Player
    {
        $player = BDD::selectWinner( $this->player_id );

        return $player;
    }
}