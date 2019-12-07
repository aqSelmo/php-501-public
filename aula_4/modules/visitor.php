<?php
/*
abstract class Object
{

    abstract public function collide(Object $object)
    {}
}
*/

class Spaceship extends Object
{

}

class AlienSpaceship extends Spaceship
{

}

class PlayerSpaceship extends Spaceship
{

}

class Asteroid extends Object
{

}

class Bullet extends Object
{
    public function collide(AlienSpaceship $s)
    {
        echo "Explodiu a nave do ET <br>";
    }

    public function collide(Border $b)
    {
        echo "Pro infito e além <br>";
    }

    public function collide(Asteroide $b)
    {
        echo "Sumiu a bala <br>";
    }
}

class Border extends Object
{

}