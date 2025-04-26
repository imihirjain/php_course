<?php
echo "This is the demo of array in php. Array in php is collection of data, which stores the data of different data types not like other programming languages</br>";

// Stored in variable
// $user1 = "Ram";
// $user2 = "Mihir";
// $user3 = "Shyam";

// echo "$user1 </br>";
// echo "$user2 </br>";
// echo "$user3 </br>";

// Stored in array
// $user = ["mihir", "Ram", 29, "Ramesh", "Tina", "Antonio"];
// echo "$user[0]</br>";
// echo "$user[1]</br>";
// echo "$user[2]</br>";
// $size=sizeof($user);
// $cnt = count($user);
// echo $cnt;
// echo $size;
// for($i=0;$i<$size;$i++)
// {
//     echo "$user[$i]</br>";
// }

echo "using for each loop to access the elements of array</br>";
$users = ["mihir", "Ram", 29, "Ramesh", "Tina", 30,51,88,"Antonio"];
foreach($users as $x){
    if($x=="Tina") continue;
    echo "$x</br>";
    // if($x==29)break;
}
// echo "for each loop break because the value is 29</br>";
echo "for each loop skip 'Tina' </br>";
?>