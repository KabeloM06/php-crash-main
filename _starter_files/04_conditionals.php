<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to in value and type
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote';
} else {
  echo'Sorry you are too young to vote';
}

$d = date("H"); // date() function formats date and time

if ($d < 12) {
  echo'Good morning';
} elseif ($d < 18) {
  echo 'Good afternoon';
} else {
  echo'Good evening';
}

$posts = ['First Post', 'Second Post', 'Last Post'];
 if(!empty($posts)){
  
  echo $posts[1];
 };


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
echo !empty($posts) ? $posts[0] : 'No Posts';
$last_post = !empty($posts) ? $posts[2] : 'No Posts';
echo $last_post;


/* -------- Switch Statements ------- */
$favcolour = 'yellow';
switch($favcolour) {
  case 'red':
    echo 'Your favorite colour is red';
    break;
  case 'yellow':
    echo 'Your favorite colour is yellow';
    break;
  case 'blue':
    echo 'Your favorite colour is blue';
    break;
  default:
    echo 'Your favourite colour is not a primary colour';  
}