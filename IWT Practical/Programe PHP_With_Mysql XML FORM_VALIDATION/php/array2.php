<?php
$subjects = array("C","C++","Java","Python","XML");
$length= count($subjects);
for($a=0; $a<$length; $a++)
{
    echo $subjects[$a]."<br>";
}
foreach($subjects as $s)
{
    echo $s."<br>";
}
?>