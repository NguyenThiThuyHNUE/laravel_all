<?php
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}

echo BSCNN(15,40)
?>