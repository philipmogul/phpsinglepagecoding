<?php
// array maps
// Starts with the callback function and array at the end and loops through each element of the array and can change each element 
$arr = [1,2,34,5,6,87,9,7];
$newarr = array_map(function($val){
    return $val * 10;
}, $arr);
echo "Original array is => ";
print_r($arr);
echo "Mapped array is => ";
print_r($newarr);

// array filters 
// starts with the array to filter through then the callback function after it. It loops through the array to look for a particular value in the array, but it cannot change any values in the array, it only filters 
$farr = array_filter($arr, function($fval){
    return $fval > 6;
});
echo "Filtered array is => ";
print_r($farr);
