<?php
/*Sort an array by key*/
$vegetables = array("d" => "onion", "a" => "coriander", "b" => "spinach", "c" => "maroon");
arsort($vegetables);
foreach ($vegetables as $key => $value) {
    echo "$key = $value\n";
}
?>
