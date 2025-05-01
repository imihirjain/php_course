<?php
// $user = ["name" => "Mihir", "age" => 30, "email" => "test@abc.com"];

// $userJson = json_encode($user);
// // print_r($userJson);
// echo $userJson;

$data = '{"name":"Mihir","age":30,"email":"test@abc.com"}';
$dataArray = json_decode($data, true);
print_r($dataArray);
