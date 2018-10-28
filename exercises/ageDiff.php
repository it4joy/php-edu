<?php

/*
  prints the difference between two birthdays with subject to different input data;
  NULL, strings and real numbers as input data are disallowed,
  but this cases will be handled;
  NOTE: perhaps, first three compares should be implemented as standalone function;
  NOTE: case when the function gets following first argument ` -'1926' ` or ` -'1986\n' ` is not handled;
  using 'abs' to get the module of the number;
*/

function getAgeDifference($birthdayFirst, $birthdaySecond) {
    $ageDiff = 0;
    
    if(is_null($birthdayFirst) || is_null($birthdaySecond) || ( is_null($birthdayFirst) && is_null($birthdaySecond) )) {
       print_r("One of the arguments (or both) is NULL\n");
       exit;
    } else if(is_float($birthdayFirst) || is_float($birthdaySecond) || ( is_float($birthdayFirst) && is_float($birthdaySecond) )) {
      print_r("One of the arguments (or both) is a real number\n");
      exit;
    } else if(is_string($birthdayFirst) || is_string($birthdaySecond) || ( is_string($birthdayFirst) && is_string($birthdaySecond) )) {
      print_r("One of the arguments (or both) is a string\n");
      exit;
    } else {
      $birthdayFirst = abs($birthdayFirst);
      //print_r("{$birthdayFirst}\n");
      $birthdaySecond = abs($birthdaySecond);
      //print_r("{$birthdaySecond}\n");
    }

    if($birthdayFirst == $birthdaySecond) {
      print_r("Ages are equal to each other\n");
    } else if($birthdayFirst > $birthdaySecond) {
        $ageDiff = $birthdayFirst - $birthdaySecond;
        print_r(sprintf("The age difference is: %d\n", $ageDiff));
    } else {
        $ageDiff = $birthdaySecond - $birthdayFirst;
        print_r(sprintf("The age difference is: %d\n", $ageDiff));
    }
}

/* getAgeDifference(1024.25, -723); */
