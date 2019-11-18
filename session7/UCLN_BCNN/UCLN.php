<?php
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
echo USCLN(15,40)
?>
