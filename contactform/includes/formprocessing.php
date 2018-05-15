<?php
if(isset($_POST["submit"])) {
	
  if (empty($_POST["firstName"])) {
    $nameErr = "First Name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstNameErr = "Only letters and white space allowed"; 
    }
  }
 if (empty($_POST["lastName"])) {
	$lastName = "";
  } else {
    $lastName = test_input($_POST["lastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastNameErr = "Only letters and white space allowed"; 
    }
  } 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if(empty($_POST["subject"]))
	{
		$subjError= "Subject is required";
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
  if ($firstNameErr=='' && $lastNameErr=='' && $emailErr=='' && $subjError=='' ){
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