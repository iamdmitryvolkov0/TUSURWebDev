<?php

class Medicine {
    public function __construct()
    {
        echo static::PrintVK();
    }
    public function PrintVK(){
        return 0;
    }
}
class Nurse extends Medicine{
    public function PrintVK()
    {
        return "<h3>Медперсонал:</h3>
              Возраст - 30 <br>
              Должность - Медсестра<br>";
    }
}
class Surgery extends Medicine {
    public function PrintVK()
    {
        return "<h3>Медперсонал:</h3>
              Возраст - 50 <br>
              Должность - Хирург<br>";
    }
}
new Nurse();
new Surgery();