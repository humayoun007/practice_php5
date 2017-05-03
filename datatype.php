

<?php 

$ten = 10;
$nine = 9;
$strTen = "10";

//gettype
//is_numeric
//round
//casting (int)

$result = $ten/$nine;

if(is_numeric($ten)){
    echo "The value of ".'$ten'." variable is :".$ten."<br/>";
    echo "the type of ".'$ten'." is ".gettype($ten)."<br/>";
}
else{
    echo "This is not a integer variable";
}

echo "Result without round is:".$result."<br/>";
echo "Result with round :".round($result)."<br/>";
echo "Result with casting as integer is :".(int)$result ."<br/>";