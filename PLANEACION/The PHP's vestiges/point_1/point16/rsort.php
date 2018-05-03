<?php
/*Sorts an array in reverse order*/
$Vegetables = array("onion", "coriander", "spinach", "maroon");
sort($Vegetables);
foreach ($Vegetables as $key => $value) {
echo "$key = $value\n";
}
?>