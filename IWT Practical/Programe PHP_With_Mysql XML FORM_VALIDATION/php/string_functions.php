<?php
$data = "Welcome to SISTec college bhopal";
//LENGTH OF STRING
echo strlen($data)."<br>";
//COUNT NUMBER OF WORDS IN STRING
echo str_word_count($data)."<br>";
//REVERSE A STRING
echo strrev($data)."<br>";
//STRING POSITION
echo strpos($data,'SISTec')."<br>";
//STRING REPLACE
echo str_replace('SISTec','SIPTec',$data)."<br>";
//CONVERT TO LOWERCASE
echo strtolower($data)."<br>";
//CONVERT TO UPPERCASE
echo strtoupper($data)."<br>";
//CONVERT TO LOWERCASE
echo ucwords($data);
?>