<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function whatIsMyName($name) {
  echo "Your name is $name";
};

whatIsMyName('Kabelo');

function sumOfNumbers($n1, $n2){
  return $sum = $n1 + $n2;
  
};
echo '<br>';
echo sumOfNumbers(25, 34);

//anonymous functions
$subtract = function($n1, $n2){
  return $n1 - $n2;
}; // This needs a ; at the end 
echo '<br>';
echo $subtract(80, 45);
echo '<br>';
// or

$multiply = fn($n1, $n2) => $n1 * $n2;
echo "Multiply 3 * 3 = {$multiply(3,3)}";
echo '<br>';