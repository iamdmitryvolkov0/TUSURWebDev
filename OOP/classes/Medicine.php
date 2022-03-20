<?php

abstract class Medicine {
    public int $age;
    public $name;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
}
