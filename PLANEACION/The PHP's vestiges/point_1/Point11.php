<?php

/*
 * An array in PHP is actually an ordered map. A map is a type of data that associates values with keys.
 * This type is optimized for several different uses; it can be used as an array, list (vector),
 * associative table (hash table - an implementation of a map), dictionary, collection, stack, queue,
 * and possibly more.Since the values of an array can be other arrays, trees and multidimensional
 *  arrays are also possible.
 */

//Example #1 A simple array

$array = [
    "foo" => "bar",
    "bar" => "foo",
];

//Example #2 Example of type molding and overwriting

$array = array(
    1 => "M",
    "1" => "O",
    1.5 => "P",
    true => "Q",
);
var_dump($array);

//Example #3 Mixed keys integer and string

echo "<br>";
echo "<br>";

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);
var_dump($array);

//Example #4 Keyless Indexed Arrays

echo "<br>";
echo "<br>";

$array = array("foo", "bar", "hello", "world");
var_dump($array);

//Example #5 Keys not in all elements
echo "<br>";
echo "<br>";

$array = array(
    "N",
    "M",
    6 => "O",
    "P",
);
var_dump($array);
