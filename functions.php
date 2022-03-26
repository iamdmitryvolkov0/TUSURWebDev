<?php

require 'data.php';

function debug($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function load($data): array
{
    foreach ($_POST as $key => $value) {
        if (array_key_exists($key, $data)) {
            $data[$key]['value'] = trim($value);
        }
    }
    return $data;
}