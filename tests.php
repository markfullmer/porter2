<?php

/**
 * @file
 * Pass texts to the algorithm for targeted testing.
 */

require_once 'Porter2.php';

$phrase = "relied relies belied communing conversationally dyed freely yoke";
$words = explode(' ', $phrase);

foreach ($words as $word) {
  echo 'Original: ' . $word . '<br />';
  $stem = new porter2($word);
  echo 'Result: ' . $stem->stem();
  echo "<hr />";
}
