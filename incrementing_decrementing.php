<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Incrementing/Decrementing operators.
 *
 * PHP has four increment and decrement operators which consist of C-style pre-increment, post-increment,
 * pre-decrement, and post-decrement operators.
 *
 * These operators only take one operand and affect numbers and strings. The NULL value is not affected
 * by the decrement operators but will change to 1 when used with the increment operators.
 */
display_value('h3', 'Incrementing/Decrementing operators.');

// The pre-increment operator increments the operand by 1 then returns it.
$var = 1;
display_value('h4', 'Pre-increment operator.');
display_value('p', ++$var);

$var2 = ++$var;
display_value('p', $var2);

// The post-increment operator returns the operand and then increments it.
$var = 1;
display_value('h4', 'Post-increment operator.');
display_value('p', $var++);

$var2 = $var++;
display_value('p', $var);
display_value('p', $var2);

// The pre-decrement operator decrements the operand by 1 then returns it.
$var = 1;
display_value('h4', 'Pre-decrement operator.');
display_value('p', --$var);

$var2 = --$var;
display_value('p', $var2);

// The post-decrement operator returns the operand and then decrements it.
$var = 1;
display_value('h4', 'Post-decrement operator.');
display_value('p', $var--);

$var2 = $var--;
display_value('p', $var);
display_value('p', $var2);

display_value('h4', 'Data types.');
$array = array(
  '0',
  '1',
  '1.1',
  '',
  'foo',
  15,
  FALSE,
  TRUE,
  NULL,
);

foreach ($array as $value) {
  @display_value('p', '++' . var_export($value, true) . ' = ' . ++$value);
}

foreach ($array as $value) {
  @display_value('p', '--' . var_export($value, true) . ' = ' . --$value);
}