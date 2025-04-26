<?php
echo "This is the demo of multidimensional array just as building 1-101, 1-102, 2-201, 2-202, 3-301, 3-302 and so on...in simple terms multiple array in single array </br>";

$users = [
    [1,"Mihir", "Delhi","abc@test.com"],
    [2,"Rajneesh", "Haryana","def@test.com"],
    [3,"Mohit", "Chennai","ghi@test.com"],
    [4,"Sumit", "Orrisa","xyz@test.com"],
];

// echo "<pre>";
// print_r($users);
// echo "</pre>";

// using loop;
for($i=0;$i<count($users);$i++)
{
    for($j=0;$j<count($users[$i]);$j++)
    {
        echo $users[$i][$j];
        echo "</br>";
    }
}
?>