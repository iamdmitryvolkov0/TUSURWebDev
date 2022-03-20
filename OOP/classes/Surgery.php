<?php
require_once "Medicine.php";

class Surgery extends Medicine
{
    public function __construct($name,$age,$role='Surgery')
    {
        parent::__construct($name,$age);
        $this->role=$role;
    }
}