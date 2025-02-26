<?php
    $str = "This is a string";
    echo $str . "<br>";
    $lem = strlen($str);
    echo "<br>The length of the string is: ". $lem . "<br>";
    echo "The number of words in the string is: ". str_word_count($str) . "<br>";
    //echo $lem;
    echo "The reversed string is: ". strrev($str) . "<br>";
    echo "The position of 'is' in the string is: ". strpos($str, "is") . "<br>";
    echo "The replaced string is: ". str_replace("is", "at", $str) . "<br>";
    echo "The substring is: ". substr($str, 5, 3) . "<br>";
    echo "The uppercase string is: ". strtoupper($str) . "<br>";
    echo "The lowercase string is: ". strtolower($str) . "<br>";
?>