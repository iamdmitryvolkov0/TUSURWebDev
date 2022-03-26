<?php

require_once 'classes/Animal.php';
require_once 'classes/Parrot.php';
require_once 'classes/Dog.php';
require_once 'classes/Cat.php';

$animals[]=new Parrot ('Vitaly',4);
$animals[]=new Dog('Sharik',8);
$animals[]=new Cat('Persik',5);

function debug ($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

debug ($animals);