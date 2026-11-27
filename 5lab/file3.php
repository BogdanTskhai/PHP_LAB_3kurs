<?php
function capital_b(string $character = 'X', string $spacer = ' '): void
{
    $s1 = $spacer;
    $s2 = $spacer . $spacer;
    $s3 = $spacer . $spacer . $spacer;
    $s4 = $spacer . $spacer . $spacer . $spacer;

    echo $character . $character . $character . $character . $character . $character . "\n";
    echo $character . $character . $s3 . $character . $character . "\n";
    echo $character . $character . $s3 . $character . $character . "\n";
    echo $character . $character . $character . $character . $character . $character . "\n";
    echo $character . $character . $s3 . $character . $character . "\n";
    echo $character . $character . $s3 . $character . $character . "\n";
    echo $character . $character . $character . $character . $character . $character . "\n";
    echo "\n";
}