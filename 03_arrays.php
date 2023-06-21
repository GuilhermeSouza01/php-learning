<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

  // Simple array
  /*
  $numbers = [1, 44, 55, 22];
  $fruits = array('apple', 'orange', 'pear');

  print_r($numbers)  
  */

  //Associative Array
  // $colors = [
  //   1 => 'red',
  //   4 => 'blue',
  //   6 => 'green'
  // ];

  // echo $colors[4];

  // $hex_colors = [
  //   'red' => '#f00',
  //   'blue' => '#00f',
  //   'green' => '#0f0'
  // ];

  // echo $hex_colors['blue'];

  /* 
    $person = [
    'firs_name' => 'Guilherme',
    'last_name' => 'Oliveira',
    'email' => 'gui@gmail.com'
  ];

  echo $person['last_name'];
  
  */
 
  // Multidimension Array

  $people = [
    [
      'firs_name' => 'Guilherme',
      'last_name' => 'Oliveira',
      'email' => 'gui@gmail.com'
    ],
    [
      'firs_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com'
    ],
    [
      'firs_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com'
    ]
  ];

  //To show the especific value
  // echo $people[1]['email'];

  //To turn into a array of json objects

  var_dump(json_encode($people));
