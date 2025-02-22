<?php

require_once('animal.php');

class Frog extends Animal
{
    public $legs = 4;

    public function jump()
    {
        echo "Jump : Hop Hopp";
    }
}