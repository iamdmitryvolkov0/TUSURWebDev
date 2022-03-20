<?php


class BookProducts extends Products
{
    public $numPages;

    public function __construct($name, $price,$numPages)
    {
        parent::__construct($name, $price);
        $this->numPages=$numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Number of pages: $this->numPages<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }
}