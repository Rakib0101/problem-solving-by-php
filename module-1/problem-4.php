<?php 

    function print_star_pattern($n) {
        for ($i = 1; $i<= $n; $i++) { 
            $stars=str_repeat('*',( 2 * $i)-1); $space=str_repeat('&nbsp; ', $n - $i);

            echo "<div>". $space . $stars . $space ."</div>" ;
        }
    }

    print_star_pattern(4);

?>