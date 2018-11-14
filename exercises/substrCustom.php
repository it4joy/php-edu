<?php

// handle border states

function mysubstr($string, $length) {
    if( !is_string($string) || !is_numeric($length) ) {
      print_r("Error: the first arg must be a string and the second arg must be a number.\n");
      exit;
    }
    
    if( strlen($string) === 0 || $length <= 0 ) {
      print_r("Error: you're not specified string or the length of required substring is incorrect. Try again, please.\n");
    } else {
      $resultingStr = '';

      $index = 0;

      while($index <= $length - 1) {
        $currentChar = $string[$index];
        $resultingStr = "{$resultingStr}{$currentChar}";
        $index += 1;
      }

      print_r("{$resultingStr}\n");
    }
}

mysubstr("bsfkjsbdfksdkfskdf", '');
