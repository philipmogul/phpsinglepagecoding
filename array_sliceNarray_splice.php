<?php 
//array_slice()
//Meaning: Returns a portion of an array, without modifying the original.
$original = ['a', 'b', 'c', 'd', 'e'];

// 1. Using array_slice(): get 3 items starting from index 1
$slice = array_slice($original, 1, 3);
print_r($slice); // ['b', 'c', 'd']


//array_splice()
//Meaning: Removes a portion of the array and optionally replaces it with something else. It modifies the original array.
// 2. Using array_splice(): remove 2 elements from index 1
$splice = $original;
array_splice($splice, 1, 2);
print_r($splice); // ['a', 'd', 'e']
