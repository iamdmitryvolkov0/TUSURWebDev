<?php
class Gruz{
    public $city;
    public $km;

    public function __construct($city,$km)
    {
        $this->city=$city;
        $this->km=$km;
    }
}
class Samolet extends Gruz{
    public function CalcTime($km){
        $averageSpeed = 200;
        $time = $km / $averageSpeed;
        return $time;
    }
    public function CalcPrice ($km){
        $tarif = 50;
        $price = $km * $tarif;
        return $price;
    }
}
class Poezd extends Gruz{
    public function CalcTime($km)
    {
        $averageSpeed = 130;
        $time = $km / $averageSpeed;
        return $time;
    }
    public function CalcPrice ($km){
        $tarif = 35;
        $price = $km * $tarif;
        return $price;
    }
}
class Avto extends Gruz{
    public function CalcTime($km)
    {
        $averageSpeed = 90;
        $time = $km / $averageSpeed;
        return $time;
    }
    public function CalcPrice ($km){
        $tarif = 20;
        $price = $km * $tarif;
        return $price;
    }
}
$route[0]=new Avto("Tomsk", 100);
$route[1]=new Poezd("Novosibirsk", 300);
$route[2]=new Samolet("Moscow", 3500);

for ($i=0;$i>3;$i++){
    echo     "<br><br>Город: ".$route[$i]->city.
             "<br>Расстояние: ".$route[$i]->km.
             "<br>Время: ".$route[$i]->CalcTime($route[$i]->km).
             "<br>Стоимость доставки: ".$route[$i]->CalcPrice($route[$i]->km);
}
var_dump(Gruz::class);
