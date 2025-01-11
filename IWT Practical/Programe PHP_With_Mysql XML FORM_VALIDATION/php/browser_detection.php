<?php
//BROWSER DETECTION
echo $_SERVER['HTTP_USER_AGENT'];
?>
<?php
//BROWSER RESTRICTION
$browser_name = $_SERVER['HTTP_USER_AGENT'];
// if(strstr($browser_name,'Chrome')==true)
// {
//     echo "<br>You are using chrome browser";
// }
if(strstr($browser_name,'Chrome')!=TRUE)
{
    echo "<br>You are not using chrome browser Kindly use Chrome browser";
}
?>