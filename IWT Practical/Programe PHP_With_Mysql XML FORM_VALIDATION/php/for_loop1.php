<?php
//FOR LOOP change color of text
for($a=5;$a<=15;$a++)
{
    $red = rand(0,255);
    $green = rand(0,255);
    $blue = rand(0,255);
    ?>
    <span style="color : rgba(<?php echo $red ;?>,<?php echo $green ;?>,<?php echo $blue ;?> ">Hello World!</span><br>
    <?php
}
?>