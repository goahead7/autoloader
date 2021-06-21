<?php

function customAutoload(string $className)
{
    $path = str_replace('cake\\', DIRECTORY_SEPARATOR, $className);

    require_once __DIR__ . "/src/$path.php";
}

spl_autoload_register('customAutoload');

$cake=new\Cake\Cake();

$cheese = new\Cake\Cheese(49);
echo $cheese->review();

$berry = new\Cake\Berry(5);
echo $berry->buy_quantity(19);

$lemon = new\Cake\Lemon(3);
echo $lemon->buy_quantity(29);
?>

