 <?php
 session_start();
//now, let's register our session variables
// session_register('groupe3');
 $_SESSION['group1'];
 $_SESSION['group2'];
 $_SESSION['groupe3'];
 $_SESSION['groupe4'];
 $_POST['email'];

//checking second page values for empty,If it finds any blank field then redirected to second page

 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
 	<title>PHP Multi Page Form</title>
 	<link rel="stylesheet" href="style.css" />
 </head>
 <body>
 	<div class="container">
 		<div class="main">
 			<h2>Passez votre devis</h2><hr/>
 			<span id="error">
 				<?php
 				if (!empty($_SESSION['error_page5'])) {
 					echo $_SESSION['error_page5'];
 					unset($_SESSION['error_page5']);
 				}
 				?>
 			</span>




 			<?php

 			echo $_SESSION['group1']."<br>" ;
 			echo $_SESSION['group2']."<br>" ;
 			echo $_SESSION['groupe3']."<br>" ;
 			echo $_SESSION['groupe4'] ."<br>" ;
 			echo $_POST['email'];

 			?>
 		</div>

 	</div>
 </body>
 </html>
