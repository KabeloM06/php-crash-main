<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x <= 12; $x++){
  echo 'For Loop '.$x.'<br>';
};



/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$y = 0;
while($y < 10){
  $y++; 
  echo 'While Loop '.$y.'<br>';
};

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$z = 1;
 do {
  echo 'Do While '.$z.'<br>';
  $z++;
 } while ($z < 11);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$kabelo = ['K', 'a', 'b', 'e', 'l', 'o', ' ', 'M','a','s','w','a','n','g','a','n','y','e'];

foreach($kabelo as $letter) {
  echo $letter;
}
echo '<br>';
for($i = 0; $i < count($kabelo); $i++){
  
  echo $kabelo[$i];
};
echo '<br>';

$posts = ['First Post', 'Second Post', 'Last Post'];

foreach ($posts as $index => $post){
  echo $index + 1 .' - '. $post.'<br>';
};

$person = [
  
    'first_name' => 'Kabelo',
    'last_name' => 'Maswanganye',
    'email' => 'kabelo@gmail.com'
  
];

foreach($person as $key => $value){
  echo "$key - $value<br>";
}