<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Arithmetic operators.
 *
 * When performing arithmetic, the result will be of type int or float.
 */
display_value('h3', 'Arithmetic operators.');

$var = '1';
$var2 = '1.5';

$array = array(
  '0',
  '1',
  '1.1',
  '',
  'foo',
  FALSE,
  TRUE,
  NULL,
  new stdClass(),
//  array(),
//  array(1),
);

// Identity: the identity operator converts a value to an int or float depending on the value. For example, it will convert
// the string "1" to an int and the string "1.5" to a float.
display_value('h3', 'Identity.');

display_values_and_types('p', array($var, +$var, $var2, +$var2));

function foo($var) {
  return $var;
}

foreach ($array as $value) {
  @($converted = +$value);
  @display_value('p', var_export($value, true) . ' converts to ' . gettype($converted) . ' ' . $converted);
}


// Negation: the negation operator inverts a value. For example, the value "2" will be inverted to "-2" and the value
// "2.1" will be inverted to "-2.1".
display_value('h3', 'Negation.');

display_values_and_types('p', array($var, -$var, $var2, -$var2));

foreach ($array as $value) {
  $result = @(gettype($value) . ' ' . var_export($value, true) . ' negated results in ' . gettype(-$value) . ' ' . -$value);
  @display_value('p', $result);
}


// Addition: the addition operator adds numbers together. The result will be of type integer or float.
display_value('h3', 'Addition.');

display_value_and_type('p', 1 + 5);
display_value_and_type('p', 1 + 5.5);

// The addition operator is left associative.
$sum = 4 + 6 + 8; // This is evaluated as (4 + 6) + 8 and results in 18.
display_value('p', '4 + 6 + 8 = ' . $sum);

foreach ($array as $value) {
  $result = @($value + 5);
  @display_value('p', gettype($value) . ' ' . var_export($value, true) . ' + 5 = ' . gettype($result) . ' ' . $result);
}


// Subtraction: the subtraction operator adds numbers together. The result will be of type integer or float.
display_value('h3', 'Subtraction.');

display_value_and_type('p', 5 - 1);
display_value_and_type('p', 5.5 - 1);

// The subtraction operator is left associative.
$sum = 1 - 3 - 5; // This is evaluated as (1 - 3) - 5 and results in -7.
display_value('p', '1 - 3 - 5 = ' . $sum);
$sum = 1 - (3 - 5); // Parenthesis controls the order an expression is evaluated. This is the same as 1 - -2 which results in 3.
display_value('p', '1 - (3 - 5) = ' . $sum);

foreach ($array as $value) {
  $result = @(5 - $value);
  @display_value('p', '5 - ' . gettype($value) . ' ' . var_export($value, true) . ' = ' . gettype($result) . ' ' . $result);
}


// Multiplication: the multiplication operator multiplies the right operand by the left operand.
display_value('h3', 'Multiplication.');

display_value_and_type('p', 2 * 5);
display_value_and_type('p', 2 * 5.1);

// The multiplication operator is left associative.
$sum = 1 * 3 * 5; // This is evaluated as (1 * 3) * 5 and results in 15.
display_value('p', '1 * 3 * 5 = ' . $sum);

foreach ($array as $value) {
  $result = @($value * 5);
  @display_value('p', gettype($value) . ' ' . var_export($value, true) . ' * 5 = ' . gettype($result) . ' ' . $result);
}


// Division: the division operator divides the left operand by the right operand.
display_value('h3', 'Division.');

display_value_and_type('p', 5 / 1);
display_value_and_type('p', 5 / 1.5);

// The division operator is left associative.
$sum = 10 / 5 / 2; // This is evaluated as (10 / 5) / 2 and results in 1.
display_value('p', '10 / 5 / 2 = ' . $sum);
$sum = 10 / (5 / 2); // This is the same as 10 / 2.5 which results in 4.
display_value('p', '10 / (5 / 2) = ' . $sum);

foreach ($array as $value) {
  $result = @(5 / $value);
  @display_value('p', '5 / ' . gettype($value) . ' ' . var_export($value, true) . ' = ' . gettype($result) . ' ' . $result);
}


// Modulo: the modulo operator returns the remainder of $a / $b. Operands of modulo are converted to integers which means
// floats have their decimal part stripped.
display_value('h3', 'Modulo.');

display_value('p', '5 % 1 = ' . 5 % 1);
display_value('p', '5 % 1.5 = ' . 5 % 1.5); // 1.5 will be converted to 1.
display_value('p', '5 % 2 = ' . 5 % 2);
display_value('p', '5 % 3 = ' . 5 % 3);

// The result of a modulo expression has the same sign as the dividend meaning the result of $foo % $bar will have the same
// sign as $foo.
display_value('p', '10 % 4 = ' . 10 % 4); // The result of this is 2, which has the same sign as 10.
display_value('p', '10 % -4 = ' . 10 % -4); // The result of this is 2, which has the same sign as 10.
display_value('p', '-10 % 4 = ' . -10 % 4); // The result of this is -2, which has the same sign as 10.
display_value('p', '-10 % -4 = ' . -10 % -4); // The result of this is -2, which has the same sign as 10.

// The modulo operator is left associative.
$sum = 40 % 7 % 2; // This is evaluated as (40 % 7) % 2 and results in 1.
display_value('p', '40 % 7 % 2 = ' . $sum);
$sum = 40 % (7 % 2); // This is the same as 40 % 1 which results in 0.
display_value('p', '40 % (7 % 2) = ' . $sum);

// A good use of the modulo operator is when you want to check if a number is even. If you use the number 2 as the divisor
// in a modulo expression then the result will be 1 for uneven dividends and 0 for even dividends, example below.
foreach (range(1, 10) as $value) {
  if (($value % 2) === 1) {
    display_value('p', $value . ' is not even.');
  }
  else {
    display_value('p', $value . ' is even.');
  }
}

foreach ($array as $value) {
  // Modulo by 0 will result in a fatal error as you cannot divide by 0.
  if (@($value != 0)) {
    $result = @(5 % $value);
    @display_value('p', '5 % ' . gettype($value) . ' ' . var_export($value, true) . ' = ' . gettype($result) . ' ' . $result);
  }
}


// Exponentiation: the exponentiation operator raises the left operand to the power of the right operand.
display_value('h3', 'Exponentiation.');

foreach (range(1, 3) as $value) {
  display_value('p', $value . ' ** 1 = ' . $value ** 1);
  display_value('p', $value . ' ** 2 = ' . $value ** 2);
  display_value('p', $value . ' ** 3 = ' . $value ** 3);
}

// The exponentiation operator is right associative.
$sum = 2 ** 2 ** 3; // This is evaluated as 2 ** (2 ** 3) and results in 256.
display_value('p', '2 ** 2 ** 3 = ' . $sum);
$sum = (2 ** 2) ** 3; // This is the same as 4 to the power of 3 or four cubed which results in 64.
display_value('p', '(2 ** 2) ** 3 = ' . $sum);

foreach ($array as $value) {
  $result = @($value ** 2);
  @display_value('p', gettype($value) . ' ' . var_export($value, true) . ' ** 2 = ' . gettype($result) . ' ' . $result);
}