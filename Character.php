<?php


class Character
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $life;

    /**
     * @var int
     */
    private int $attack;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param int $life
     */
    public function setLife($life)
    {
        if ($life % 2 === 0) {
            $this->life = $life;
        } else {
            $this->life = $life +1;
        }
    }

    /**
     * @return int
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param int $attack
     */
    public function setAttack($attack)
    {
        if ($attack > 100) {
            $this->attack = 100;
        } else {
            $this->attack = $attack;
        }
    }

}