<?php
require_once "Medicine.php";

class Nurse extends Medicine
{
    public function __construct($name,$age,$role='Nurse')
    {
        parent::__construct($name,$age);
        $this->role=$role;
    }
}