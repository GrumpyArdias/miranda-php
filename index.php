<?php

$test_Arr = [
    "id" => 1,
    "test" => "Mario"
];

// require_once './blade/BladeOne.php';

//segundo parametro puede ser un array 
//de lo que traigo de la base de datos bookings por ejemplo
// echo $blade->run("index", array("rooms" => $test_Arr));
require './views/about.blade.php';
