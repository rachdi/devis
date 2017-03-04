<?php
session_start();
//now, let's register our session variables
// session_register('group2');

//finally, let's store our posted values in the session variables
$_SESSION['group2'] = $_POST['group2'];

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
        if (!empty($_SESSION['error_page3'])) {
          echo $_SESSION['error_page3'];
          unset($_SESSION['error_page3']);
        }
        ?>
      </span>
      <form action="page4_form.php" method="post">

       <label for="">Quelle est la surface des locaux concernée</label><br>

       <input type="radio" name="groupe3" value="Moins de 50 m²" checked> Moins de 50 m²<br>
       <input type="radio" name="groupe3" value="De 50 à 100 m²" checked> De 50 à 100 m²<br>
       <input type="radio" name="groupe3" value="De 100 à 150 m²" checked> De 100 à 150 m²<br>
       <input type="radio" name="groupe3" value=" De 150 à 300 m²" checked> De 150 à 300 m²<br>
       <input type="radio" name="groupe3" value="De 300 à 500 m²" checked> De 300 à 500 m²<br>
       <input type="radio" name="groupe3" value="De 500 à 1 000 m²" checked> De 500 à 1 000 m²<br>
       <input type="radio" name="groupe3" value="De 1 000 à 5 000 m²" checked> De 1 000 à 5 000 m²<br>
       <input type="radio" name="groupe3" value="5 000 m² et plus" checked> 5 000 m² et plus<br>

       <input  type="reset" value="Reset" />
       <input name="submit" type="submit" value="Submit" />

     </form>
   </div>

 </div>
</body>
</html>