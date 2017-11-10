<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * String operators.
 *
 * PHP has two string operators. The first is the concatenation "." operator which joins two strings
 * together and returns the result. And the second is the assignment ".=" operator which joins the right
 * operand to the left operand.
 */
display_value('h3', 'String operators.');

// The concatenation operator "." joins two strings together and returns the result.
display_value('h4', 'Concatenation "." operator.');
$var = 'Hello' . ' World.';
display_value('p', $var);

// Values that are not of type string will be converted to strings.
$var = 'Number ' . 1;
display_value('p', $var);


// The assignment operator joins the right operand to the left operand.
display_value('h4', 'Assignment ".=" operator.');
$var = 'Hello';
$var .= ' World!';
display_value('p', $var);

$var = 2;
// When joining a string and a sum, the string concatenation will take place first because the "." operator
// and the "+" operator have equal precedence and are both left associative.

// This will be evaluated as "('Total: ' . $var) + 4" which results in 4 because strings that are non-numeric
// and do not begin with a number have a value of 0.
@display_value('p', 'Total: ' . $var + 3);
@display_value('p', $var . 'Total: ' + 3);

// The use of parenthesis cause the "''Total: ' string to be concatenated to the sum of "$var + 4".
@display_value('p', 'Total: = ' . ($var + 3));