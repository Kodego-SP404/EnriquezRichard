<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number: $x <br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  initial value
  while (condition) {
  // code to be executed
  //Increment
  }
*/

// $x = 1;
// while($x <= 10){
//   echo "Number: $x <br>";
//   $x++;
// }

//Do While
/* $x = 1;
do{
  echo "Number: $x <br>";
  $x++;
}while($x <=5); */

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
/* $posts = ['First Post', 'Second Post', 'Third Post'];
for ($x = 0; $x < count($posts); $x++){
  echo "$posts[$x] <br>";
}
echo "<br>";
foreach($posts as $post){
  echo "$post <br>";
} */

// Associative Array 
$person = [
  'first_name' => 'Ryan',
  'last_name' => 'Azur',
  'email' => 'razur@gmail.com'
];

//Get Keys
foreach ($person as $key => $val){
  echo "$key - $val <br>";
}
