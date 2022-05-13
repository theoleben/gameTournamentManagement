<?php

namespace Modeles\Entites;

// use Modeles\BDD;

class Game
{
    private $id;
    private $title;
    private $min_players;
    private $max_players;

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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of min_players
     */ 
    public function getMin_players()
    {
        return $this->min_players;
    }

    /**
     * Set the value of min_players
     *
     * @return  self
     */ 
    public function setMin_players($min_players)
    {
        $this->min_players = $min_players;

        return $this;
    }

    /**
     * Get the value of max_players
     */ 
    public function getMax_players()
    {
        return $this->max_players;
    }

    /**
     * Set the value of max_players
     *
     * @return  self
     */ 
    public function setMax_players($max_players)
    {
        $this->max_players = $max_players;

        return $this;
    }
}