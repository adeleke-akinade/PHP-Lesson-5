<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Execution operators.
 *
 * PHP has just one execution operator which is the backticks "``". Do not confuse them with the single quotes.
 *
 * PHP will attempt to execute the contents of the backticks as shell command returning the output.
 */
display_value('h3', 'Execution operators.');

display_value('div', `dir`);

// The backticks are identical to the shell_exec() function.
display_value('div', shell_exec('dir'));