<?php

interface iHero
{
    public const MY_HERO = "Pango";
    public function getVie();
    public function getForce();
    public function getMagie();
    public function getAgilite();
    public function getIntelligence();
    public function __construct($vie, $force, $magie, $agilite, $intelligence);
}
