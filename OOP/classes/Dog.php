<?php


class Dog extends Animal
{
    public function __construct($name,$age,$type='dog')
    {
        parent::__construct($name,$age,$type);
    }
}