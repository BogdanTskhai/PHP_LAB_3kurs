<?php
$name = 'Messershmitt';
print $name . ' is learning PHP' . "\n";

$fruit = 'apple';
print "$fruit juice is made from {$fruit}s.\n";

$fruit = 'orange';
print "$fruit juice is made from {$fruit}s.\n";

$happyMessage = <<<TEXT
PHP is fun
😊
☕

TEXT;

print "$happyMessage\n";