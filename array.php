<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Array operators.
 *
 * PHP has 6 array operators. These operators are not unique to arrays.
 */
display_value('h3', 'Array operators.');

// The Union "+" operator. This operator joins the right array to the left array and returns the result.
display_value('h4', 'Union + operator.');
$array = array(1, 2, 3);
$array2 = $array + array(3 => 4, 4 => 5, 5 => 6);
var_dump($array);
var_dump($array2);

// If the arrays have the same keys then the values in the right array will be ignored.
$array3 = $array + array(1, 2, 3);
var_dump($array3);

// The Equality "==" operator. This operator checks whether the arrays have the same key/value pairs.
display_value('h4', 'Equality == operator.');
$array = range(1, 5);
$array2 = range(1, 5);
var_dump($array);
var_dump($array2);
if ($array == $array2) {
  display_value('p', '$array and $array2 have the same key/value pairs');
}
else {
  display_value('p', '$array and $array2 do not have the same key/value pairs');
}

$array2 = range(1, 10);
var_dump($array);
var_dump($array2);
if ($array == $array2) {
  display_value('p', '$array and $array2 have the same key/value pairs');
}
else {
  display_value('p', '$array and $array2 do not have the same key/value pairs');
}

// The equality operator does not care about the order of the arrays' items or the type of the values.
$array = array(3 => '3', 7 => 7, 2 => 2);
$array2 = array(3 => 3, 2 => 2, 7 => '7');
var_dump($array);
var_dump($array2);
if ($array == $array2) {
  display_value('p', '$array and $array2 have the same key/value pairs');
}
else {
  display_value('p', '$array and $array2 do not have the same key/value pairs');
}


// The Identity "===" operator. This operator checks whether the arrays have the same key/value pairs
// in the same order and of the same type.
display_value('h4', 'Identity === operator.');
$array = range(1, 5);
$array2 = range(1, 5);
var_dump($array);
var_dump($array2);
if ($array === $array2) {
  display_value('p', '$array and $array2 have the same key/value pairs in the same order and of the same type');
}
else {
  display_value('p', '$array and $array2 do not have the same key/value pairs in the same order and of the same type');
}

$array = array(3 => '3', 7 => 7, 2 => 2);
$array2 = array(3 => 3, 2 => 2, 7 => '7');
var_dump($array);
var_dump($array2);
if ($array === $array2) {
  display_value('p', '$array and $array2 have the same key/value pairs in the same order and of the same type');
}
else {
  display_value('p', '$array and $array2 do not have the same key/value pairs in the same order and of the same type');
}


// The Inequality "!=" operator. This operator checks whether the arrays do not have the same key/value pairs.
display_value('h4', 'Inequality != operator.');
$array = range(1, 2);
$array2 = range(1, 3);
var_dump($array);
var_dump($array2);
if ($array != $array2) {
  display_value('p', '$array and $array2 do not have the same key/value pairs');
}
else {
  display_value('p', '$array and $array2 have the same key/value pairs');
}

// The inequality operator is the exact opposite of the equality operator.
$array = array(3 => '3', 7 => 7, 2 => 2);
$array2 = array(3 => 3, 2 => 2, 7 => '7');
var_dump($array);
var_dump($array2);
if ($array != $array2) {
  display_value('p', '$array and $array2 do not have the same key/value pairs');
}
else {
  display_value('p', '$array and $array2 have the same key/value pairs');
}

// The "<>" operator is also an equality operator.
display_value('h4', 'Inequality <> operator.');
if ($array <> $array2) {
  display_value('p', '$array and $array2 do not have the same key/value pairs');
}
else {
  display_value('p', '$array and $array2 have the same key/value pairs');
}


// The Non-identity  "!==" operator. This operator checks whether the arrays do not have the same key/value pairs
// in the same order and of the same type.
display_value('h4', 'Non-identity !== operator.');
$array = range(1, 2);
$array2 = range(1, 2);
var_dump($array);
var_dump($array2);
if ($array !== $array2) {
  display_value('p', '$array and $array2 do not have the same key/value pairs in the same order and of the same type');
}
else {
  display_value('p', '$array and $array2 have the same key/value pairs in the same order and of the same type');
}

$array = array(1, '2');
$array2 = array(1, 2);
var_dump($array);
var_dump($array2);
if ($array !== $array2) {
  display_value('p', '$array and $array2 do not have the same key/value pairs in the same order and of the same type');
}
else {
  display_value('p', '$array and $array2 have the same key/value pairs in the same order and of the same type');
}