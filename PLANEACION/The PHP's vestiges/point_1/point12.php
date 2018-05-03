<?php
/**
 * The dimension of an array indicates the number of indices you need to select an element.
 */
$cars = array
  (
  array("Volvo",44,24),
  array("BMW",30,26),
  array("Saab",7,3),
  array("Land Rover",22,13)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
/**
 * For a two-dimensional array you need two indices to select an element
 */
?>

