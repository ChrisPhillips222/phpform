<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = "";
$emailErr = ""; 
$subjError = "";
$name = "";
$email = "";
$subject = ""; 
$comment = "";
$errCount = 0;
$errTest = "";

if(isset($_POST["submit"])) {
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$errCount = 0;
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	$errCount +1;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
	  $errCount +1;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	$errCount = 1;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
	  $errCount = 1;
    }
  }
  if(empty($_POST["subject"]))
	{
		$subjError= "Subject is required";
		$errCount = 1;
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
  if ($errCount != 1) {
		require "PHPMailerAutoload.php";
		require "class.phpmailer.php";
		$mail = new PHPmailer;
		$mail->IsSMTP();
		$mail->Host = "smtp.webhostingforstudents.com";
		$mail->Port = "587";
		$mail->SMTPAuth = true;
		$mail->Username = "phpmailertestaccount@paigedahl.webhostingforstudents.com";
		$mail->Password = "Canelbownoodles$";
		$mail->SMTPSecure = "tls";
		$mail->From = $_POST["email"];
		$mail->FromName = $_POST["name"];
		$mail->AddAddress("phpmailertestaccount@paigedahl.webhostingforstudents.com");
		$mail->AddCC($_POST["email"], $_POST["name"]);
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = $_POST["subject"];
		$mail->Body = $_POST["comment"];
		if($mail->Send())
		{
			echo "Thank You!";
		}
		else
		{
			echo "There was an Error"; 
		}
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	
<h2>Contact Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Subject: <input type="text" name="subject" value="<?php echo $subject;?>">
  <span class="error">* <?php echo $subjError;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
$nameErr = "";
$emailErr = ""; 
$subjError = "";
$name = "";
$email = "";
$subject = ""; 
$comment = "";
$errCount = 0;
$errTest = "";
?>
		
</body>
</html>	