<?php
echo "This is the demo for assosciative array mean it stores the data in key value pair</br>";

$userDetails = [
    "name"=>"Mihir Jain",
    "age"=>24,
    "city"=>"Delhi",
    "email"=>"abc@test.com",
    "state"=>"Delhi"
];

// echo $userDetails["name"];
// echo "</br>";
// echo $userDetails["age"];
// echo "</br>";
// echo $userDetails["email"];
// echo "</br>";
// echo $userDetails["state"];
// echo "</br>";


// using loops
// foreach($userDetails as $key=>$data)
// {
//     echo "$key is $data</br>";
// }

// second method of using for each loop
foreach($userDetails as $key=>$data):
    echo "$key => $data</br>";
endforeach
?>