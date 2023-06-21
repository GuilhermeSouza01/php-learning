<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
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

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */


$favcolor = 'red';

switch($favcolor) {
  case "red":
    echo "Your favorite color is red";
    break;
  case "blue":
    echo "Your favorite color is blue";
    break;
  case "green":
    echo "Your favorite color is green";
    break;
  default:
    echo "Your favorite color is not here.";
}









$age = 17;
if($age >= 18) {
  echo "You are old enough to vote";
} else {
  echo "Sorry, you are not old to vote";
}




date_default_timezone_set('America/Sao_Paulo');
$time = date("H");
echo $time;

if($time < 12) {
  echo "Good Morning";
}
else if( $time < 18 ) {
  echo "Good Afternoon";
}
else {
  echo "Good Evening";
}



$posts = ['First Post'];

// Using ternary

$hasPost = !empty($posts) ? $posts[0] : "No Posts";
echo $hasPost;





