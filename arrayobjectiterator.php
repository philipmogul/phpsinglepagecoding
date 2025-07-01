<?php 

// Php arrayiterator allows you to modify and unset the values 
// while iterating over arrays and objects.
$array = ['1' => 'apple', '2' => 'banana', '3' => 'cherry'];
$arrayObject = new ArrayObject($array);
$iterator = $arrayObject->getIterator();
for($iterator; $iterator->valid(); $iterator->next()) 
{
    echo $iterator->key() . ' => ' . $iterator->current() . "</br>";
}
