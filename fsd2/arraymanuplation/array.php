<?php
$arr = [5, 3, 9, 1, 7];
echo "Original: ";
print_r($arr);

sort($arr);
echo "<br>Sorted: ";
print_r($arr);

array_push($arr, 10);
echo "<br>After Push: ";
print_r($arr);

array_pop($arr);
echo "<br>After Pop: ";
print_r($arr);
?>
