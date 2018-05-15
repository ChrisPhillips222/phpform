<!DOCTYPE html>
<!--
File Name: contact.php
Date: 04/18/18
Programmers: Janice Bradford, Chris Phillips
Project: History 251: Albina Street Walking Tour
-->
<?php
include "includes/connect.php";
include "includes/formprocessing.php";
?>
<html lang="en">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta name="author" content="Janice Bradford, Chris Phillips, Patrick Ting">
		<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

		<title>African American History Walking Tour</title>

		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Libre+Baskerville" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">

		<link href="assets/bootstrap.min.css" rel="stylesheet">
		<link href="assets/styles.css" rel="stylesheet" type="text/css">
		<link href="assets/form.css" rel="stylesheet" type="text/css">

		<style>
			/* use to outline blocks while styling and debugging
			{ outline: 1px solid red !important } */
		</style>
	</head>

	<body>

		<header>
			<?php include 'includes/header.php'; ?>
			
			<nav class="navbar navbar-fixed-top">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							Menu
					</button>

					<div id="navbar">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php" target="_self">Home</a></li>
							<li class="active"><a href="#" target="_self">Information</a></li>
							<li> <a href="#" class="dropdown-toggle" target="_self">Locations &#9660;</a>
								<ul class="nested-menu">
									<li><a href="#" target="_self">Location 1</a></li>
									<li><a href="#" target="_self">Location 2</a></li>
									<li><a href="#" target="_self">Location 3</a></li>
									<li><a href="#" target="_self">Location 4</a></li>
									<li><a href="#" target="_self">Location 5</a></li>
									<li><a href="#" target="_self">Location 6</a></li>
								</ul>
							</li>
							<li><a href="#" target="_self">FAQ</a></li>
							<li><a href="#" target="_self">Contact</a></li>
						</ul><!-- /.nav navbar-nav navbar-right -->
					</div><!-- /.navbar -->
					
				</div><!-- /.navbar-header -->
			</nav><!-- /.navbar navbar-fixed-top -->

		</header>

		<main>
			<div class="content">
				
				<article class="content-block">
					<h2>Questions? Comments?</h2>
					<p>Have a question about the walking tour? Want to share a memory about a location with us?</p>
					<p>Send us a message!</p>
				</article>

				<?php include 'includes/divider.php'; ?>
				
				<form method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
					<div class="form-block">
					<fieldset>
						<p class="lbl">First name</p>
						<input type="text" name="firstName" id="firstName" tabindex="1" required value="<?php echo $firstName;?>">
  <span class="error"> <?php echo $firstNameErr;?><br>

						<p class="lbl">Last name</p>
						<input type="text" name="lastName" id="lastName" tabindex="2" value="<?php echo $lastName;?>">
  <span class="error"> <?php echo $lastNameErr;?><br>

						<p class="lbl">Email address</p>
						<input type="email" name="email" id="email" tabindex="3" required value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?><br>

						<p class="lbl">Subject</p>
						<input type="text" name="subject" id="subject" tabindex="4" required value="<?php echo $subject;?>">
  <span class="error"> <?php echo $subjError;?><br>
						
						<p class="lbl">Questions or comments</p>
						<textarea type="text" id="comment" name="comment" tabindex="5" maxlength="1500"><?php echo $comment;?></textarea><br>
					</fieldset>	
					
					<input class="sendBtn" type="submit" name="submit" value="Submit" tabindex="6">

					</div><!-- /.form-block -->
				</form>

			</div>
		</main>

		<?php include 'includes/divider.php'; ?>
		
		<footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>

	</body>
</html>