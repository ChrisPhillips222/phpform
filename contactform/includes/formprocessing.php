<?php

if(isset($_POST["submit"])) {
  $errCount = false;
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $errCount = true;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $errCount = true;
    }
  } 
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $errCount = true;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
	  $errCount = true;
    }
  }
  if(empty($_POST["subject"]))
	{
		$subjError= "Subject is required";
		$errCount = true;
	}
	else
	{
		$subject = test_input($_POST["subject"]);
	}
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if ($nameErr=='' && $emailErr=='' && $subjError=='' ){
      include "includes/writetodatabase.php";
      include "includes/mailprocessing.php";
}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>