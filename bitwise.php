<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Bitwise operators.
 *
 * Bitwise operators allow the manipulation and evaluation of integers' binary value. PHP has six bitwise operators.
 *
 * If you do not understand binary digits then I suggest reading up on them prior to watching this part of the tutorial
 * otherwise you will struggle to understand.
 */
display_value('h3', 'Bitwise operators.');

// The And operator "&". This operator compares the binary value of two or more integers and returns a new integer with a 1
// where all values had a 1 and a 0 everywhere else.
display_value('h4', 'The "&" operator.');

/*
 * The binary value of 7 is 111 and the binary value of 5 is 101. The "&" operator would compare them like so:
 * 7: 111
 * 5: 101
 * Above, we can see that in two of the rows both values have a 1 and in one of the rows only one of the values has a 1.
 * The other, of-course, having a 0. The result of this will be an integer of 5 because the left most column will contain
 * a 1 and the right most column will contain a 1, which adds up to 5 in decimal.
 */
$var = 7 & 5;
display_value('p', '7 & 5 = ' . $var);

/*
 * Using the "&" operator with the integers 7, 5, and 3:
 * 7: 111
 * 5: 101
 * 3: 011
 * Above, we can see that there is only one column in which all values contain a 1 and it is the right most column. This
 * means that the integer returned will be 1.
*/
$var = 7 & 5 & 3;
display_value('p', '7 & 5 & 3 = ' . $var);


// The Or operator "|". This operator compares the binary value of two or more integers and returns a new integer with a 1
// where any of the values have a 1 and a 0 where none of the values have a 1.
display_value('h4', 'The "|" operator.');

/*
 * Using the | operator with the integers 7 and 5:
 * 7: 111
 * 5: 101
 * Above we can see that in three of the columns at-least one of the values contains a 1. This means that the integer
 * returned will be 7.
 */
$var = 7 | 5;
display_value('p', '7 | 5 = ' . $var);

// The Xor operator "^". This operator compares the binary value of two or more integers and returns a new integer with a 1
// where only one of the values contains a 1 and a 0 for everything else.
display_value('h4', 'The "^" operator.');

/*
 * Using the "^" operator with the integers 15 and 12:
 * 15: 1111
 * 12: 1100
 * Above, we can see that in the two rightmost columns only one of the values contains a 1. This means that the integer
 * returned will be 3.
 */
$var = 15 ^ 12;
display_value('p', '15 ^ 12 = ' . $var);

/*
 * The Not operator "~". This operator is slightly different to those seen so far as it only has a single operand. It
 * returns an integer which contains a 1 for each position in the operand that contains a 0 and a 0 for each position
 * in the operand that contains a 1. Essentially switching the 1's in the operand for 0's and the 0's in the operand
 * for 1's.
 */
display_value('h4', 'The "~" operator.');

$pos_dec = 9; // 1001
$neg_dec = ~ $pos_dec; // 0110
display_value('p', '$pos_dec = ' . var_export($pos_dec, true));
display_value('p', '$neg_dec = ' . var_export($neg_dec, true));
display_value('p', '$pos_int = ' . var_export(decbin($pos_dec), true));
display_value('p', '$neg_int = ' . var_export(decbin($neg_dec), true));


// The Shift left operator "<<". This operator shifts the bits in the left operand to the right the number
// of positions in the right operand (multiply by 2).
display_value('h4', 'The "<<" operator.');
$var = 10; // 1010
display_value('p', 'Decimal ' . $var . ' = binary ' . decbin($var));
$var2 = 2;
$var3 = $var << $var2; // 101000
display_value('p', 'Decimal ' . $var3 . ' = binary ' . decbin($var3));

// The Shift left operator has the same effect as multiplying the left operand by 2, the number of
// times stored in the right operand.
$var4 = 10;
for ($i=0; $i<$var2; $i++) {
  $var4 *= 2;
}
display_value('p', 'Decimal ' . $var4 . ' = binary ' . decbin($var4)); // This will have the same value as $var3


// The Shift right operator ">>". This operator shifts the bits in the left operand to the left the number
// of positions right in the right operand (divide by 2).
display_value('h4', 'The ">>" operator.');
$var = 10; // 1010
display_value('p', 'Decimal ' . $var . ' = binary ' . decbin($var));
$var2 = 2;
$var3 = $var >> $var2; // 10
display_value('p', 'Decimal ' . $var3 . ' = binary ' . decbin($var3));

// The Shift right operator has the same effect as dividing the left operand by 2, the number of
// times stored in the right operand (with the removal of any decimal places).
$var4 = 10;
for ($i=0; $i<$var2; $i++) {
  $var4 /= 2;
}
display_value('p', 'Decimal ' . floor($var4) . ' = binary ' . decbin($var4)); // This will have the same value as $var3