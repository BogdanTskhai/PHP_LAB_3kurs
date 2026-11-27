<?php
for ($i = 21; $i >= 1; $i-1) {
    if ($i % 3 != 0) {
        continue;
    }
    print "$i\n";
}
?>