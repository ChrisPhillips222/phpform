<?php

// see what information is in $_POST for debugging
print_r($_POST);

// error reporting
error_reporting(E_ALL);

    
//create $sql variable
  $sql = "INSERT INTO mailtest(
      name,
      email,
      subject,
      comment
      )VALUES(
      '$name', 
      '$email', 
      '$subject',
      '$comment'
      );";
  
  // display the value of $sql for debugging
  echo "<br>2. SQL: " . $sql . "<br>";
  
  // Perform a query and check for errors
  if (!mysqli_query($conn,$sql)) {
      echo("Error description: " . mysqli_error($con));
  } else {
    echo "yes";
 }


?>
