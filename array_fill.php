<?php
// The array_fill() function in PHP creates a new array and fills it with values, starting at a specified index and continuing for a specified number of elements.

// array_fill(int $start_index, int $count, mixed $value): array

$arr = array_fill(0, 4, "apple");
print_r($arr);

/*
Output:
Array
(
    [0] => apple
    [1] => apple
    [2] => apple
    [3] => apple
)
*/