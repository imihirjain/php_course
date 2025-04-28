<?php
echo "this is the demo for local and global variable in php </br>";
$name = "Global</br>";
function greetName()
{
    $name = "Local</br>";
    // global $name;
    echo $name;

    function innerFun()
    {
        $name = "Inner Function</br>";
        echo $name;
    }
}
echo $name;
greetName();
innerFun();
