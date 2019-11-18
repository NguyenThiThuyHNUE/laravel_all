<?php
$bang_diem = array(7, 5, 9, 6, 20, 10, 15);
sort($bang_diem);
$clength = count($bang_diem);
for ($x = 0; $x < $clength; $x++) {
    echo $bang_diem[$x];
    echo ',';
}
?>
