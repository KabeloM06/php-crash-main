<?php
/* ----------- Arrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple Array
$numbers = [1, 45, 458];
$fruit = array('apples', 'pears', 'bananas');

print_r($numbers);
var_dump($fruit);
echo $fruit[2]; // remember that arrays are zero based

// Associative Array
// We can create the index

$colors = [
  1=> 'red',
  3 => 'yellow',
  7 => 'green'
];

print_r($colors);
var_dump($colors);
echo $colors[2]; // Warning: Undefined array key 2 in C:\xampp\htdocs\php-crash-main\_starter_files\03_arrays.php on line 27
echo $colors[3];

$hex = [
  'red'=> '#f00',
  'blue'=> '#0f0',
  'green' => '#00f'
];

echo $hex['red'];

$people = [
  [
    'first_name' => 'Kabelo',
    'last_name' => 'Maswanganye',
    'email' => 'kabelo@gmail.com'
  ],
  [
    'first_name' => 'Tlhogi',
    'last_name' => 'Ngcobo',
    'email' => 'tlhogi@gmail.com'
  ],
  [
    'first_name' => 'Lauren',
    'last_name' => 'Bentley',
    'email' => 'lauren@gmail.com'
  ],
];

var_dump($people);
echo $people[1]['email'];
var_dump(json_encode($people));
