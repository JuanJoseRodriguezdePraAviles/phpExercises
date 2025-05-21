<?php
/*
Take an array and remove every second element from the array. Always keep the first element and start removing with the next element.

Example:
["Keep", "Remove", "Keep", "Remove", "Keep", ...] --> ["Keep", "Keep", "Keep", ...]

None of the arrays will be empty, so you don't have to worry about that!
*/

function removeEveryOther($array) {
  // write your code here
  $index = 2;
  while(count($array)>=$index){
    array_splice($array, $index-1, 1);
    $index+=1;
  }
  
  return $array;
}

print(removeEveryOther([1, 2, 3]));