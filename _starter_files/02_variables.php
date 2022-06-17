<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Kabelo'; //string
$age = 33; //int
$has_kids = false; //bool
$cash_in_wallet = 52.32; //float


// printing with one quote or double quotes
echo $name . ' is ' . $age . ' years old and sexy';
echo "$name has $cash_in_wallet in his wallet";

echo 5 + 3;
echo 10 - 1;
echo 3 * 7;
echo 15 / 3;
echo 10 % 3; // gives remainder after devision

var_dump($age);

// Create a constant
// define('NAME_OF_CONSTANT_CAPATILISED','value');
define('HOST', 'localhost');
echo HOST;  