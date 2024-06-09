<?php 

    function sum_of_digits($n) {
        $digits = str_split($n);
        return array_sum($digits);
    }

    echo "<h2>62343 this numbers sum of all digit is " . sum_of_digits(62343) . "</h2>";

    echo "<h2>1000 this numbers sum of all digit is " . sum_of_digits(1000) . "</h2>";

?>