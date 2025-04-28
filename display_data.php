

<?php
$users = [
    [1, "Mihir", "Delhi", "abc@test.com"],
    [2, "Rajneesh", "Haryana", "def@test.com"],
    [3, "Mohit", "Chennai", "ghi@test.com"],
    [4, "Sumit", "Orrisa", "xyz@test.com"],
];

echo "<table border='2'>";

echo "<tr>
<th>S.no</th>
<th>Name</th>
<th>State</th>
<th>Email</th>
</tr>";

for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        echo "</br>";
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?> 