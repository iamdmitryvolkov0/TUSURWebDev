<?php


class Animal
{
    public $name;
    public $age;
    public $type;

    public function __construct($name,$age,$type)
    {
        $this->name=$name;
        $this->age=$age;
        $this->type=$type;
    }
}