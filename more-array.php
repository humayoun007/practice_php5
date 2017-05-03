<?php 


$values = "man|bird|animal";

$array = explode("|",$values);

print_r($array);

echo "<br/>";

$string = implode(" and ",$array);

echo $string."<br/>";;


if(in_array("bird",$array)){
    echo "bird is in array"."<br/>";
}
else{
    echo "bird is not in array"."<br/>";
}


$animals = array("dog","cat","mouse","ant","dog");

$animals = array_unique($animals);

echo "There is no duplicate in animals array , so they are :".implode(",",$animals)."<br/>";


sort($animals);

echo "after sort the animals array values are: ".implode(",",$animals)."<br/>";

echo "reverse values of animals array are:".implode(",",array_reverse($animals))."<br/>";

echo "random values of animals array are :".$animals[array_rand($animals,1)]."<br/>";