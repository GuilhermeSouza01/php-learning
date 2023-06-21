<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 1; $x <=10; $x++) {
  echo "Number: $x <br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$cond = 1;
while($cond <= 15) {
  echo "Number: $cond <br>";
  $cond++;
  
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$cond2 = 6;

do {
  echo "Number: $cond2 <br>";
  $cond2++;
}while($cond <=5);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

foreach($posts as $index => $post) {
  echo $index + 1 . "- $post <br>";
}