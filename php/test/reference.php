<?php
    $a = 1;
    $b = &$a;
    echo (++$a) + ($a++);
    echo "\n";
?>
