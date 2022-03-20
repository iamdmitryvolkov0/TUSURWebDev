<?php
require_once "classes/Surgery.php";
require_once "classes/Nurse.php";
require_once "classes/Medicine.php";

$stuff[]=new Nurse('Kate', 21);
$stuff[]=new Surgery('Oleg Petrovich', 52);
$stuff[]=new Nurse('Tatyana',30);
$stuff[]=new Surgery('Kirill',28);

function debug ($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

debug($stuff);

