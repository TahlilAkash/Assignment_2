<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
  $vowelCount = 0;
  $reversedString = strrev($string);

  // Count vowels   
  for ($i = 0; $i < strlen($string); $i++) {
    if (strripos("aeiou", $string[$i]) !== false) {
      $vowelCount++;
    }
  }

  // Print the results
  echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
