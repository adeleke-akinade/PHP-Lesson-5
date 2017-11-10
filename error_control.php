<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Error control operators.
 *
 * PHP has just one error control operator, the "@" symbol. It is used to suppress errors.
 */
display_value('h3', 'Error control operators.');

//var_dump($var); // This will cause an 'Undefined variable' notice.

@var_dump($var); // This will suppress the 'Undefined variable' notice because of the prepended @ symbol.

@($foo += $bar);