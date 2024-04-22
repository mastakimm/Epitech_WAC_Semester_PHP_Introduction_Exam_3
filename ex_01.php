<?php

class hero extends personnage
{
    private $vie;
    private $force;
    private $magie;
    private $agilite;
    private $intelligence;
    public const MY_HERO = "Pango";


    public function __construct(int $vie, int $force, int $magie, int $agilite, int $intelligence)
    {
        $this->vie = $vie;
        $this->force = $force;
        $this->magie = $magie;
        $this->agilite = $agilite;
        $this->intelligence = $intelligence;
    }
    public function getVie()
    {
        return $this->vie;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function getMagie()
    {
        return $this->magie;
    }

    public function getAgilite()
    {
        return $this->agilite;
    }

    public function getIntelligence()
    {
        return $this->intelligence;
    }
}
