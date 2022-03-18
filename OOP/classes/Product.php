<?php

class Product{
    public $manufacturer; //производитель
    public $price; //цена
    public $shelfLife; // срок хранения
    public $quantity; // количество

    public function __construct($manufacturer,$price,$shelfLife,$quantity)
    {
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->shelfLife = $shelfLife;
        $this->quantity = $quantity;
    }

    public function getProductInfo()
    {
        return "<h3>О продукте:  </h3>
                Производитель: $this->manufacturer<br>
                Цена: $this->price<br>
                Срок хранения: $this->shelfLife<br>
                Количество: $this->quantity <br>";

    }
}
