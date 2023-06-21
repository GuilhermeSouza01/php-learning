<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

echo "Array Functions";
echo "<br>";

$fruits = ['apple', 'orange', 'pear'];

// Get length

echo count($fruits);
echo "<br>";

// Search array
var_dump(in_array('orange', $fruits));
echo "<br>";

// Add to array

$fruits[] = 'grape'; //add in end of array
array_push($fruits, 'blueberry'); //same of last
array_unshift($fruits, 'mango'); //add in the beginner

// Remove from array

array_pop($fruits); //Remove the last element => "blueberry"
array_shift($fruits); // Remove the beginner => ""mango

unset($fruits[3]); //Remove specific element

//Split into 2 chunks
echo "Split ";

$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);
echo "<br>";

// Concat array
echo "Concat ";
$arr1 = [1, 2, 3];
$arr2 = [5, 6, 7];

$arr3 = array_merge($arr1, $arr2);

print_r($arr3);
echo "<br>";
echo "<br>";
// Spread
echo "Using Spread operator";
echo "<br>";
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);
echo "<br>";

// Using combine to set a array to format key : value
echo "<br>";
echo "Using combine";

$colorsArray = ['green', 'red', 'yellow'];
$fruitsCombineColorArray = ['avocado', 'apple', 'banana'];

$turnKeyValueFormat = array_combine($colorsArray, $fruitsCombineColorArray);
echo "<br>";

print_r($turnKeyValueFormat);
echo "<br>";
echo "<br>";
// Create a range array
echo "Range Array";
echo "<br>";

$numbers = range(1, 20);
print_r($numbers);


echo "<br>";

// Map into array

// map into array and add a String "Number"

echo "<br>";

echo "Map in new Array";
echo "<br>";
$newNumbers = array_map(function($number) {
  return "Number: $number";
}, $numbers);

print_r($newNumbers);
echo "<br>";
echo "<br>";
// Filter array
echo "Filter Array";

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
echo "<br>";

print_r($lessThan10);
echo "<br>";
echo "<br>";
// Reduce
echo "Reduce array";
echo "<br>";
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

