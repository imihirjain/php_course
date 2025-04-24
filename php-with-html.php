<?php
$h2_color="skyblue";
echo "In this file we are using php with html and vice versa";
$name="Mihir";

echo "<h1 style='color:red;'>$name</h1>";

echo "<h1 style='color:blue;'>My name is ".$name."</h1>";
?>



<h1 style='color:orange;'>
    My name is
    <?php
    echo $name;
    ?>
</h1>

<h2 style="color:<?php echo $h2_color;?>"> <?php echo "this is h2 tag";?> </h2>
<h2 style="color:<?php echo $h2_color;?>"> <?php echo $name;?> </h2>
<h2 style="color:<?php echo $h2_color;?>">i am mentioning here <?php echo "Another h2 tag";?> </h2>