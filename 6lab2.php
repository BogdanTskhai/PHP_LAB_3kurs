<?php
while (true) {
    $input = readline("Слово: ");
    if (is_numeric($input)) {
        break;
    }
}