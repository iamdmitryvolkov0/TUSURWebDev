<?php
require_once "classes/Products.php";
require_once "classes/NotebookProducts.php";
require_once "classes/BookProducts.php";

function debug ($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProducts('Три мушкетера',20,213);
$notebook = new NotebookProducts('Dell',1000,'Intel');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();
?>
<html>
<title>Тестим наследование</title>
</html>