<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Assignment operators.
 *
 * The basic assignment operator is the "=" symbol. Although, it can be combined with other operators as a shorthand
 * for an expression. For example, $foo = $foo + 5 can be shortened to $foo += 5;
 *
 * All assignment operators are right associative.
 *
 * Assignment operators simply set the operand on the left to the value of the expression on the right. This assignment is
 * usually done by value but can also be done by reference, if, for example, you were assigning the value of one variable
 * to another.
 */
display_value('h3', 'Assignment operators.');

$var = 5; // The variable $var will now contain a value of (int) 5.
display_value('p', $var);

$var += 10; // This is the same as "$var = $var + 10" meaning $var now contains (int) 15.
display_value('p', $var);

$var2 = $var; // The value of $var is assigned to $var2 meaning that changing $var2 will not affect $var.
$var2 *= 3;
display_value('p', $var);
display_value('p', $var2);

// The value of an assignment expression is the value assigned. Meaning, the value of $foo = 10 is 10. This allows you
// to assign multiple operands different values within a single expression.
$var = ($var2 = 10) * 10;
display_value('p', $var); // This will contain 100.
display_value('p', $var2); // This will contains 10.

// Assigning by reference. When you assign by reference, both operand point to the same piece of data.
display_value('h4', 'Assigning by reference.');
// Predending the operand on the right with an "&" symbol causes the expression to be assigned by reference not value.
// $var2 and $var3 will both point to the same piece of data meaning that changing one will change the other.
$var3 = &$var2;
$var3 /= 2;
display_value('p', $var2);
display_value('p', $var3);

// There is one exception to the assignment by value rule and that is objects. Objects are assigned by reference since
// PHP 5. You can use the clone keyword to copy an object rather than assigning it by reference.
$obj = new stdClass();
// Changing $obj will affect $obj2 and vice versa as we have assigned by reference.
$obj2 = $obj;
$obj2->foo = 'bar';
display_value('p', var_dump($obj));
display_value('p', var_dump($obj2));

// Changing $obj3 will not affect $obj2 as rather than assigning by reference, we have copied it using the clone keyword.
$obj3 = clone $obj2;
$obj3->bar = 'foo';
display_value('p', var_dump($obj));
display_value('p', var_dump($obj3));

// Combined operators.
display_value('h4', 'Combined operators.');
$var = 2;
display_value('p', $var . ' += 5 = ' . $var += 5);
$var = 2;
display_value('p', $var . ' -= 5 = ' . $var -= 5);
$var = 2;
display_value('p', $var . ' *= 5 = ' . $var *= 5);
$var = 2;
display_value('p', $var . ' **= 5 = ' . $var **= 5);
$var = 2;
display_value('p', $var . ' /= 5 = ' . $var /= 5);
$var = 2;
display_value('p', $var . ' .= 5 = ' . $var .= 5);
$var = 2;
display_value('p', $var . ' %= 5 = ' . $var %= 5);
$var = 2;
display_value('p', $var . ' &= 5 = ' . $var &= 5);
$var = 2;
display_value('p', $var . ' |= 5 = ' . $var |= 5);
$var = 2;
display_value('p', $var . ' ^= 5 = ' . $var ^= 5);
$var = 2;
display_value('p', $var . ' <<= 5 = ' . $var <<= 5);
$var = 2;
display_value('p', $var . ' >>= 5 = ' . $var >>= 5);

// An assignment expression will change the type of a value when required.
display_value('h4', 'Type conversion.');
$array = array(
  '0',
  '1',
  '1.1',
  '',
  'foo',
  '10foo',
  'foo10',
  FALSE,
  TRUE,
  NULL,
  new stdClass(),
//  array(), // not all types can be converted. An array will cause a fatal error.
);

foreach ($array as $value) {
  @display_value('p', var_export($value, true) . ' += 5 = ' . $value += 5);
}