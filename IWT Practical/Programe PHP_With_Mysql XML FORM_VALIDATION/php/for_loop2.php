<?php
//FOR LOOP generate 10 boxes of random colors
for($a=5;$a<15;$a++)
{
    $red = rand(0,255);
    $green = rand(0,255);
    $blue = rand(0,255);
    ?>
    <div style="border:1px solid black; height:100px; width:100px; background-color:rgba(<?php echo $red ;?>,<?php echo $green ;?>,<?php echo $blue ;?> "></div><br>
    <?php
}
?>