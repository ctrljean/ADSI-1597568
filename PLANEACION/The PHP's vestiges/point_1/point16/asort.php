<?php
/*Sorts an array and maintains the index association*/
$vegetables = array("d" => "onion", "a" => "coriander", "b" => "spinach", "c" => "maroon");
asort($vegetables);
foreach ($vegetables as $key => $value) {
    echo "$key = $value\n";
}
?>

