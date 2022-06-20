<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear', 'banana'];

//get length
echo count($fruits);
echo '<br>';

// serrach array
echo var_dump(in_array('banana', $fruits)); // Returns true or false
echo '<br>';

// Add to an array
$fruits[] = 'grape'; // Automatically ads to end of array
print_r($fruits);
echo '<br>';

array_push($fruits, 'litchi', 'mango'); // Also adds to the end
print_r($fruits);
echo '<br>';

array_unshift($fruits, 'grapefruit'); // Adds to start of array
print_r($fruits);
echo '<br>';

// Remove from array
array_pop($fruits); // removes last entry
print_r($fruits);
echo '<br>';

array_shift($fruits); // removes first entry
print_r($fruits);
echo '<br>';

unset($fruits[2]); // removes entry at specific index
print_r($fruits);
echo '<br>';

// Concatenate array
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
print_r($arr1);
echo '<br>';
print_r($arr2);
echo '<br>';

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
echo '<br>';

$arr4 = [...$arr2, ...$arr1]; // spread oparator
print_r($arr4);
echo '<br>';

// Combine. Takes first array and uses the values as keys while 2nd array are the values
array_pop($arr4);
$c = array_combine($arr4, $fruits);
print_r($c);
echo '<br>';

// Map
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

$newNumbers = array_map(function($number) { //takes in a function first
  return "Number $number"; // a return for each item in array
}, $numbers); // also needs to take in original array

print_r($newNumbers);
echo '<br>';

$justNumbers = array_map(fn($number) => $number, $numbers);
print_r($justNumbers);
echo '<br>';

// filter
// takes in original arra, then function
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

print_r($lessThan10);
echo '<br>';

// reduce: Best for working with sums
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

