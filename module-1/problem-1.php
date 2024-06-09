<?php 

function min_absolute_value($numbers) {
    $get_abs_values = array_map('abs', $numbers);
    $get_min_values = min($get_abs_values);

    return $get_min_values;
}

$numbers1 = [10, 12, 15, 189, 22, 2, 34];
print_r($numbers1);
echo "<h2>"."in this array minimum absolute value is ". min_absolute_value($numbers1)."</h2><br><br>";

$numbers2 = [10, -12, 34, 12, -3, 123];
print_r($numbers2);
echo "<h2>"."in this array minimum absolute value is ". min_absolute_value($numbers2)."</><br><br>";

?>