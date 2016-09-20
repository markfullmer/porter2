<?php

/**
 * @file
 * Test the Algorithm against the authoritative dataset.
 */

ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT);

// Time the operation.
$start = microtime(TRUE);
require_once 'Porter2Stem.php';
$dataset = (array) parse_ini_file('Datasets/full.ini', TRUE);
$count = 0;
$true = 0;
$results = array();
foreach ($dataset as $key => $value) {
  $outcome = 'FAIL';
  $stemmer = new porter2($key);
  // Demonstrate passing custom exceptions to the instantiated object.
  $stemmer->custom_exceptions = array('mexican' => 'mexic');
  $stem = $stemmer->stem();
  if ($stem == $value) {
    $true++;
    $outcome = 'PASS';
  }
  $count++;
  $results[] = array($key, $value, $stem, $outcome);
}
echo $true / $count * 100 . '% accurate results.';
echo '
<table border=1>
  <thead>
    <tr>
      <th>Word</th>
      <th>Expected</th>
      <th>Outcome</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>';

foreach ($results as $result) {
  if ($result[3] == 'FAIL') {
    echo '<tr><td>' . $result[0] . '</td>';
    echo '<td>' . $result[1] . '</td>';
    echo '<td>' . $result[2] . '</td>';
    echo '<td>' . $result[3] . '</td></tr>';
  }
}
echo '
  </tbody>
</table>';

echo (microtime(TRUE) - $start);
echo ' seconds to complete operation.';
