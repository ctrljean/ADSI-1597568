
<?php

/*
 * is a Javascript notation for writing objects, 
 * an excellent way to store information that we want
 * to share between different components or languages of web applications.
 */


$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;

?>