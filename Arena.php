<?php

use Character;

class Arena
{

    /**
     * @var \Character
     */
    private Character $character1;
    /**
     * @var \Character
     */
    private Character $character2;

    /**
     * Arena constructor.
     * @param \Character $character1
     * @param \Character $character2
     */
    public function __construct(Character $character1, Character $character2)
    {
        $this->character1 = $character1;
        $this->character2 = $character2;
    }

    /**
     * @param \Character $character1
     * @param \Character $character2
     */
    public function fight(Character $character1, Character $character2) : Character
    {
        while ($character1->getLife() > 0 || $character2->getLife() > 0 ) {
            $character1->setLife($character1->getLife() - $character2->getAttack());
        }
    }

    /**
     * @return \Character
     */
    public function getCharacter1(): \Character
    {
        return $this->character1;
    }

    /**
     * @param \Character $character1
     */
    public function setCharacter1(\Character $character1): void
    {
        $this->character1 = $character1;
    }

    /**
     * @return \Character
     */
    public function getCharacter2(): \Character
    {
        return $this->character2;
    }

    /**
     * @param \Character $character2
     */
    public function setCharacter2(\Character $character2): void
    {
        $this->character2 = $character2;
    }



}