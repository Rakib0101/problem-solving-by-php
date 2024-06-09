<?php 

    function reverse_characters_in_words($sentence) {
        $words = explode(' ', $sentence);
        $reversed_words = array_map(function($word) {
        return strrev($word);
    }, $words);

        return implode(' ', $reversed_words);
    }

    $sentence = 'I love programming';
    echo "<h2>Here is reverse of '$sentence' is  " . reverse_characters_in_words($sentence) . "<h2 />";

?>