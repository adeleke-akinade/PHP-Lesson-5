<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Operator precedence.
 *
 * Precedence controls the order in which an expression is evaluated.
 */
display_value('h3', 'Precedence.');

display_value('h3', 'Addition and Multiplication.');
// Because the multiplication "*" operator, has a higher precedence than the addition "+" operator, it is evaluated first.
// The expression below will evaluate to 52 not 70 as the "5 * 10" part is evaluated first.
$result = 2 + 5 * 10;
display_value('p', $result);

// The use of parenthesis enables you to control the order in which an expression is evaluated.
// The expression below will evaluate to 70 as the parenthesis cause the "2 + 5" part to be evaluated first.
$result = (2 + 5) * 10;
display_value('p', $result);

display_value('h3', 'Subtraction and Equals.');
// When operators have equal precedence their associativity decides the order in which the expression is evaluated.
// For example, the "-" operator is left associative, meaning 2 - 4 - 8 is evaluated as (2 - 4) - 8 and results in -10.
$result = 2 - 4 - 8;
display_value('p', $result);

// The "=" operator is right associative meaning that $a = $b = $c is evaluated as $a = ($b = $c).
$a = 2;
$b = 4;
$c = 8;
$a = $b = $c;
display_value('p', $a);
display_value('p', $b);
display_value('p', $c);

// Operators of equal precedence that are non-associative are not allowed next to each-other.
//$foo = 1 == 1 === 1 // This is invalid as the "==" and "===" operators are non-associative.
$bar = 1 <= 1 == 1; // This is valid because "<=" has a higher precedence than "==".

// For a comprehensive list of operator precedence and associativity checkout the following web page
// https://secure.php.net/manual/en/language.operators.precedence.php