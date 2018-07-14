
<?php
$first_array = array(rand(),rand(),rand(),rand(),rand());
print_r ($first_array);
sort($first_array);
print_r ($first_array);
$max = max($first_array);
$min = min($first_array);
$first_array[0] = $max;
$first_array[count ($first_array)-1] = $min;
print_r ($first_array);
?>



