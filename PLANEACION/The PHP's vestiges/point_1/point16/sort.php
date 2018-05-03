<?php
/*Order an array*/
$Vegetables = array("onion", "coriander", "spinach", "maroon");
sort($Vegetables);
foreach ($Vegetables as $key => $value) {
echo "vegetables[" . $key . "] = " . $value . "\n";
}
?>
