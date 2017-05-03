<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    
    if(isset($_POST["rating"]))
    {
        $rating = test_input($_POST["rating"]); 
        echo "Rating is: " . $rating;

    } 
    
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Give a rating from 1 to 3:
    <select name="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>        
    </select>
    <input type="submit" name="btnSendForm" value="Send" />
</form>