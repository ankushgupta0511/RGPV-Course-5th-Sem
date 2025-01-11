<?php
//MULTIDIMENSIONAL ARRAY
$data = array(
    array("Ram",10,9999),
    array("Shyam",20,8888),
    array("Mahesh",30,7777)
);
echo $data[0][0]."<br>";
echo $data[0][2]."<br>";
echo $data[1][2]."<br>";
echo $data[2][2]."<br>";
echo "Name : ".$data[0][0].", Age : ".$data[0][1].", Mobile_no. : ".$data[0][2]."<br>";
echo "Name : ".$data[1][0].", Age : ".$data[1][1].", Mobile_no. : ".$data[1][2]."<br>";
echo "Name : ".$data[2][0].", Age : ".$data[2][1].", Mobile_no. : ".$data[2][2];
?>