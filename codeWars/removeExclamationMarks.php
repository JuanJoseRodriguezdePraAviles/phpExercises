<?php
//Write function RemoveExclamationMarks which removes all exclamation marks from a given string.
function remove_exclamation_marks($string) {
  // Your code here.
  return str_replace(['¡', '!'], '', $string);
}

print(remove_exclamation_marks("¡Hello World!"));