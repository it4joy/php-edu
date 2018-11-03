<?php

// this function does not use a quoted number as the second argument (e.g. '1024')

function hasString($txt, $str) {
  if(!is_string($txt) || !is_string($str)) {
    print_r("One or both argument isn't a string\n");
    exit;
  }
  
  $strLen = strlen($str);

  $strStartPos = strpos($txt, $str);
  if(!$strStartPos) {
    print_r("Required string wasn't find.\n");
  }

  // prevent not full word given as second argument via regexp
  if( !preg_match("/\b{$str}\b/", $txt) )
    exit("Error: '{$str}' - it looks like a not full matched word\n");

  if( substr($txt, $strStartPos, $strLen) === $str )
    print_r("The required string '{$str}' was found in the text and it starts on the following position: {$strStartPos}\n");
}

hasString("Simple text and that's all :) It's an example.", 'all');
