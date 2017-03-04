
<?php
session_start();
//now, let's register our session variables
// session_register('groupe3');

//finally, let's store our posted values in the session variables
$_SESSION['groupe4'] = $_POST['groupe4'];

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
                if (!empty($_SESSION['error_page4'])) {
                    echo $_SESSION['error_page4'];
                    unset($_SESSION['error_page4']);
                }
                ?>
            </span>



            <form action="contact-us.php" method="post">

              <label for="">Entrez votre Email :</label>
              <input type="email" name="email" required="">



              <input type="submit" value="Envoyer" />
          </form>
      </div>

  </div>
</body>
</html>





