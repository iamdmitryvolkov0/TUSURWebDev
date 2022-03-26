<?php


class Cat extends Animal
{
    public function __construct($name,$age,$type='cat')
    {
        parent::__construct($name,$age,$type);
    }
}