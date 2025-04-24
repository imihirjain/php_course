<?php
 echo "This is for loop";
 echo "</br>";
 $num=25;
 for($i=1;$i<=10;$i++)
 {
    // if($i==4) break; -> when i=4 then it break out from the loop and end the rest of prog.
    // if($i==4)continue; -> when i=4 then it skips that part and continue to print the rest of the code.

    echo "$num X $i = ".$num*$i;
    echo "</br>";
    // if($i==4) break; -> if break used later then it will print the condition then break out from the loop.

    // if($i==4 || $i==7)continue; 

 }
?>