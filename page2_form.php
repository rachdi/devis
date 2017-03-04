

<?php
//let's start the session
session_start();
//now, let's register our session variables
// session_register('group1');

//finally, let's store our posted values in the session variables
$_SESSION['group1'] = $_POST['group1'];

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
//To show error of page 2
        if (!empty($_SESSION['error_page2'])) {
          echo $_SESSION['error_page2'];
          unset($_SESSION['error_page2']);
        }
        ?>
      </span>
      <form action="page3_form.php" method="post">
       <label for="">Quelle fréquence de nettoyage souhaitez-vous</label><br>
       <input type="radio" name="group2" value="Nettoyage de fin de chantier / sinistre / déménagement"> Nettoyage de fin de chantier / sinistre / déménagement<br>
       <input type="radio" name="group2" value="Nettoyage d'espaces extérieurs (façade, espace vert, vitres extérieures)" checked> Nettoyage d'espaces extérieurs (façade, espace vert, vitres extérieures)<br>
       <input type="radio" name="group2" value="Nettoyage de parking" checked> Nettoyage de parking
       <br />

       <input  type="reset" value="Reset" />
       <input  type="submit" value="Next" />

     </form>
   </div>


 </div>
</body>
</html>