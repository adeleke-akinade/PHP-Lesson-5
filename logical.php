<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Logical operators.
 *
 * PHP has 6 logical operators which all take 2 operands accept for the "!" operator which takes just one operand.
 * All of these operators care only about the value of the operand(s) and not the type.
 */
display_value('h3', 'Logical operators.');

// "and" operator returns true if both operands are equal to true.
display_value('h4', 'and operator');
$var = TRUE;
$var2 = TRUE;
if ($var and $var2) {
  display_value('p', '$var and $var2 are both true');
}
else {
  display_value('p', '$var and/or $var2 are not equal true');
}

var_dump(1 and 1); // This will return true as the "and" operator does not care about type.
var_dump(1 and 0); // This will return false as only one of the operand is equal to true.


// "or" operator returns true if either operand is equal to true.
display_value('h4', 'or operator');
$var = TRUE;
$var2 = FALSE;
if ($var or $var2) {
  display_value('p', '$var or $var2 is equal to true');
}
else {
  display_value('p', '$var and $var2 are not equal to true');
}

var_dump(1 or 0); // This will return true as the "or" operator does not care about type.
var_dump(0 or 0); // This will return false as neither of the operands are equal to true.


// "Xor" operator returns true if either operand is equal to true but not both.
display_value('h4', 'Xor operator');
$var = TRUE;
$var2 = TRUE;
if ($var Xor $var2) {
  display_value('p', 'Either $var or $var2 is equal to true');
}
else {
  display_value('p', '$var and $var2 are either BOTH equal to true or BOTH not equal to true');
}

var_dump(1 Xor 0); // This will return true as the "Xor" operator does not care about type.
var_dump('1' Xor '1'); // This will return false as BOTH of the operands are equal to true.
var_dump(0 Xor 0); // This will return false as BOTH of the operands are not equal to true.


// "!" operator returns true if the operand is not equal to true.
display_value('h4', '! operator');
$var = TRUE;
$var2 = FALSE;
var_dump(!$var);
var_dump(!$var2);
if ( !$var ) {
  display_value('p', '$var is false');
}
else {
  display_value('p', '$var is true');
}
if ( !$var2 ) {
  display_value('p', '$var2 is false');
}
else {
  display_value('p', '$var2 is true');
}


// "&&" operator is identical to the "and" operator accept for that it has a higher precedence.
display_value('h4', '&& operator');
$var = TRUE && FALSE; // Because "&&" has a higher precedence than "=" this is evaluated as $var = (TRUE && FALSE).
var_dump($var);
$var = TRUE and FALSE; // Because "and" has a lower precedence than "=" this is evaluated as ($var = TRUE) and FALSE.
var_dump($var);


// "||" operator is identical to the "or" operator accept for that it has a higher precedence.
display_value('h4', '|| operator');
$var = FALSE || TRUE; // Because "||" has a higher precedence than "=" this is evaluated as $var = (FALSE || TRUE).
var_dump($var);
$var = FALSE or TRUE; // Because "or" has a lower precedence than "=" this is evaluated as ($var = FALSE) or TRUE.
var_dump($var);