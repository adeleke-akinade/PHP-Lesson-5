<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Comparison operators.
 *
 * Comparison operators allow you to compare two values. These comparisons can be
 * strong (type sensitive) or loose (type insensitive).
 */
display_value('h3', 'Comparison operators.');

// Equal operator "==". This operator checks if two values are equal.
display_value('h4', 'Equal operator.');
$var = 1;
$var2 = "1";
// This will pass as 1 and "1" are equal.
if ($var == $var2) {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are equal.');
}
else {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are not equal.');
}

// Identical operator "===". This operator checks if two values are equal and of the same type.
display_value('h4', 'Equal operator.');
// This will fail as 1 and "1" are equal but not of the same type so are not identical.
if ($var === $var2) {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are identical.');
}
else {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are not identical.');
}

// Not equal operator "!=". This operator checks if two values are not equal.
display_value('h4', 'Not equal operator.');
if ($var != $var2) {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are not equal.');
}
else {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are equal.');
}

// Alternative not equal operator "<>"
if ($var <> $var2) {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are not equal.');
}
else {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are equal.');
}

// Not identical operator "!==". This operator checks if two values are not identical.
display_value('h4', 'Not identical operator.');
if ($var !== $var2) {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are not identical.');
}
else {
  display_value('p', var_export($var, true) . ' and ' . var_export($var2, true) . ' are identical.');
}

// Less than operator "<". This operator checks if the left operand is less than the right operand
$var2 = 5;
display_value('h4', 'Less than operator.');
if ($var < $var2) {
  display_value('p', var_export($var, true) . ' is less than ' . var_export($var2, true) . '.');
}
else {
  display_value('p', var_export($var, true) . ' is not less than ' . var_export($var2, true) . '.');
}

// Less than or equal to operator "<=". This operator checks if the left operand is less than or equal to
// the right operand
$var = 5;
display_value('h4', 'Less than or equal to operator.');
if ($var <= $var2) {
  display_value('p', var_export($var, true) . ' is less than or equal to ' . var_export($var2, true) . '.');
}
else {
  display_value('p', var_export($var, true) . ' is greater than ' . var_export($var2, true) . '.');
}

$var2 = 4;
if ($var <= $var2) {
  display_value('p', var_export($var, true) . ' is less than or equal to ' . var_export($var2, true) . '.');
}
else {
  display_value('p', var_export($var, true) . ' is greater than ' . var_export($var2, true) . '.');
}

// Greater than operator ">". This operator checks if the left operand is greater than the right operand
$var2 = 5;
display_value('h4', 'Greater than operator.');
if ($var > $var2) {
  display_value('p', var_export($var, true) . ' is greater than ' . var_export($var2, true) . '.');
}
else {
  display_value('p', var_export($var, true) . ' is not greater than ' . var_export($var2, true) . '.');
}

// Greater than or equal to operator ">=". This operator checks if the left operand is less than or equal to
// the right operand
$var = 5;
display_value('h4', 'Greater than or equal to operator.');
if ($var >= $var2) {
  display_value('p', var_export($var, true) . ' is greater than or equal to ' . var_export($var2, true) . '.');
}
else {
  display_value('p', var_export($var, true) . ' is less than ' . var_export($var2, true) . '.');
}

$var2 = 6;
if ($var >= $var2) {
  display_value('p', var_export($var, true) . ' is greater than or equal to ' . var_export($var2, true) . '.');
}
else {
  display_value('p', var_export($var, true) . ' is less than ' . var_export($var2, true) . '.');
}

/*
 * When comparing a number with a string the string is converted to a number except for when using the
 * "===" or "!==" operators as they compare value and type.
 */
display_value('h4', 'Type conversion.');
display_value('p', var_dump(NULL == "")); // NULL will be converted to an empty string.
display_value('p', var_dump(TRUE == "")); // "" will be converted to boolean FALSE.

display_value('h4', 'Comparing different types.');

// When comparing arrays the one with fewer members is less.
display_value('p', 'array(1, 2) <= array(1, 2, 3): ' . var_export(array(1, 2) <= array(1, 2, 3), true));

display_value('p', 'array(1, 2) == array(1, 2): ' . var_export(array(1, 2) == array(1, 2), true));
display_value('p', 'array(1, 2) === array(1, 2) : ' . var_export(array(1, 2) === array(1, 2), true));

// If the left operand has a key that is not in the right operand then the arrays are un-comparable.
$value = 'array(\'foo\' => 1, \'bar\' => 2) == array(1, 2) : ';
$value .= var_export(array('foo' => 1, 'bar' => 2) == array(1, 2), true);
display_value('p', $value);

$value = 'array(\'foo\' => 1, \'bar\' => 2) === array(1, 2) : ';
$value .= var_export(array('foo' => 1, 'bar' => 2) === array(1, 2), true);
display_value('p', $value);

// Objects are greater than anything else.
display_value('p', 'new stdClass() > array(1, 2) : ' . var_export(new stdClass() > array(1, 2), true));

// Arrays are greater than anything else other than objects.
display_value('p', 'array(1, 2) > new stdClass() : ' . var_export(array(1, 2) > new stdClass(), true));
display_value('p', 'array(1, 2) > 1000: ' . var_export(array(1, 2) > 1000, true));