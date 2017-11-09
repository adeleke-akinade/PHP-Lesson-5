<h2 style="text-align:center">Learn PHP Programming Lesson 5: Operators</h2>

<?php
require './helpers.php';
require './menu.php';

/*
 * Type operators.
 *
 * PHP has one type operator, the "instanceof" operator which is used to determine if a variable
 * is an instantiated object of a certain class. This operator also works with descendant classes.
 */
display_value('h3', 'Type operators.');

class foo {
  public $bar = 'foo';
}

class bar extends foo {
  public $foo = 'bar';
}

class foobar extends bar {
  public $foobar = 'foobar';
}

$obj = new foo();
var_dump($obj instanceof foo);

$obj = new bar();
var_dump($obj instanceof foo);
var_dump($obj instanceof bar);

$obj = new foobar();
var_dump($obj instanceof foo);
var_dump($obj instanceof bar);
var_dump($obj instanceof foobar);