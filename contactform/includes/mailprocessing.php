<?php	  
	  require "class/PHPMailerAutoload.php";
	  require "class/class.phpmailer.php";
      $mail = new PHPmailer(true);
      try{
		$mail->IsSMTP();
		$mail->Host = "janicebradford.webhostingforstudents.com";
		$mail->Port = "587";
		$mail->SMTPAuth = true;
		$mail->Username = "info@janicebradford.webhostingforstudents.com";
		$mail->Password = "cas285group1";
		$mail->SMTPSecure = "tls";
		$mail->From = $_POST["email"];
		$mail->FromName = $_POST["firstName"]." ".$_POST["lastName"];
		$mail->AddAddress("info@janicebradford.webhostingforstudents.com");
	//	$mail->AddCC($_POST["email"], $_POST["name"]);
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = $_POST["subject"];
		$mail->Body = $_POST["comment"];
		$mail->Send();
		echo "Thank You!\n";
      
      } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
?>