<?php 

    function count_words_in_file($file_path) {

        if (!file_exists($file_path)) {
            die("File not found.");
        }

        $text = file_get_contents($file_path);

        $words = str_word_count($text);

        return $words;
    }

    $file_path = '../textfile.txt';

    echo "<h2>In my textfile.txt file has ".count_words_in_file($file_path)." words </h2>";

?>