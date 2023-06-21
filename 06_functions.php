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
function registerUser($userName) {
  echo $userName . ' registered';
}

// registerUser('Guilherme');

function sum($n1, $n2) {
  return $n1 + $n2;
}

$resultOfFunction =  sum(5, 6);

echo $resultOfFunction;

echo "<br>";
echo "Unnamed Function";
echo "<br>";

// Unnamed function

$subtract = function($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(7, 9 );

echo "<br>";
echo "Arrow Function";
echo "<br>";
// Arrow Function

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(8, 3);
