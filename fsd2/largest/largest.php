<?php
function largest($a, $b) {
    function compare($x, $y) {
        return ($x > $y) ? $x : $y;
    }
    return compare($a, $b);
}
echo "Largest number: " . largest(10, 25);
?>
