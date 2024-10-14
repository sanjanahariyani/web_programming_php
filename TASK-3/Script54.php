<?php
$a = array(
  array(
    'id' => 101,
    'first_name' => 'AAA',
    'last_name' => 'ABC',
  ),
  array(
    'id' => 102,
    'first_name' => 'BBB',
    'last_name' => 'BCD',
  ),
  array(
    'id' => 103,
    'first_name' => 'CCC',
    'last_name' => 'CDE',
  )
);

$last_names = array_column($a, 'id');
print_r($last_names);
?>