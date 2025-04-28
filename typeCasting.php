<?php
echo "Here is the demo of type casting in php </br>";
$a = 10;
$a = (string)$a;

$b = "12";
$b = "abc";
$b = (int)$b;

// $c = "";
// $c = 123;
$c = "abc";
$c = (bool) $c;
var_dump($c);
