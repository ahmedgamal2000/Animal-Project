<?php

require 'Animal.php';
class Cow extends Animal
{
    private $owner;

    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }
}

$cow = new Cow('dfg' , 'fdfd');

echo $cow->setOwner('fgdgfd');
echo $cow->getFamily();
echo $cow->getFood();