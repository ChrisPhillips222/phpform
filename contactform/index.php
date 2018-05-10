<?php
include "includes/connect.php";
include "includes/formprocessing.php";
?><!DOCTYPE HTML>  
<html>
<head>
<title>Contact Form</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
	
<h2>Contact Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" required value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" required value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Subject: <input type="text" name="subject" required value="<?php echo $subject;?>">
  <span class="error">* <?php echo $subjError;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>	
<?php
include "includes/closeconnection.php";
?>
