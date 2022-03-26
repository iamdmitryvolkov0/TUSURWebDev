<?php


class Parrot extends Animal
{
    public function __construct($name,$age,$type='parrot')
    {
        parent::__construct($name,$age,$type);
    }
}