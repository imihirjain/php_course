<?php

echo "this is the demo for multidimensional assosciative array means multi dimensional array with key value pair</br></br>";

$users = [
    ["name" => "Mihir", "age" => "24", "city" => "delhi"],
    ["name" => "Sam", "age" => "20", "city" => "noida"],
    ["name" => "Raman", "age" => "32", "city" => "hisar"],
    ["name" => "Ishita", "age" => "44", "city" => "panipat"],
];
echo "<table border='2'>";
echo "<tr>
<th>Name</th>
<th>Age</th>
<th>City</th>
</tr>";
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $key => $x) {
        echo "<td>";
        echo "$key -> $x";
        echo "</br>";
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
