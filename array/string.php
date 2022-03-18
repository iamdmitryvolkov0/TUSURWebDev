<?php

$data_txt = file_get_contents('text.txt');
$data_strings = preg_split("/\n/", $data_txt);
$char_index = 1;
$complete = '';

foreach ($data_strings as $s) {
    $data_chars = preg_split('//', $s);
    $replace = '';
    foreach ($data_chars as $char)  //посимвольно читаем
    {
        $replace .= ' |'.$char_index.'| '.$char; //палочки для визуализации
        $char_index++;

    }
    if (is_numeric($s[0]))  //если начинается с цифры, добавляем скобки
    {
        $replace = "($replace)";
    }
    $complete .= "$replace\n";
}
var_dump($complete);