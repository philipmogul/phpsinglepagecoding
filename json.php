<?php 

// putting data into a json file 

$data = [
	"Name"=>"Philip Mumo",
	"Occupation"=>"Fintech",
	"Age"=>31,
	"Networth"=> 20,
	"Trader"=> 1
];

$en = json_encode($data);

// echo $en; 
// output will be in json format 


// putting the json data into a js file 
file_put_contents("json.js", $en);


echo "Reading from a json file: <br />";

$readFile = file_get_contents("json.js");
$vals = json_decode($readFile, true); // Outputs array form $arr["Name"];
// if you dont include true, it will output object form $obj->Name; 
print_r($vals);