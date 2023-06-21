<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = "extras/users.txt";

// if exist
if(file_exists($file)) {
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Paulo' . PHP_EOL . 'Sara' . PHP_EOL . 'João';
  fwrite($handle, $contents);
  fclose($handle);
}