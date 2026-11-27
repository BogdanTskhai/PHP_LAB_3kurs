<?php
print "123";
require_once __DIR__ . '/file1.php';
print "789\n";

//2 завдання
require_once __DIR__ . '/function.php';
var_dump(which_is_larger(3, 3));
var_dump(which_is_larger(5.5, 2.3));
var_dump(which_is_larger(10, 15.7));

require_once __DIR__ . '/file3.php';

capital_b();

capital_b(character: 'X');

capital_b(spacer: ' ');