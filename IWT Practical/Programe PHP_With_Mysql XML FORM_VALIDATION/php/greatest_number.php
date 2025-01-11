<?php
$a=100;
$b=200;
$c=30;
if (($a>$b) && ($a>$c))
    echo "$a is largest among three numbers";
elseif (($b>$a) && ($b>$c))
    echo "$b is greatest among three numbers";
else
    echo "$c is greatest among three numbers";
?>