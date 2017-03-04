<?php
session_start();
//now, let's register our session variables
// session_register('groupe3');

//finally, let's store our posted values in the session variables
$_SESSION['groupe3'] = $_POST['groupe3'];

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
            <form action="page5_form.php" method="post">

                <label for="">Sous quel délai doit commencer la prestation ?</label><br>
                <input type="radio" name="groupe4" value="Urgent" checked> Urgent<br>
                <input type="radio" name="groupe4" value="Dans les 7 jours" checked> Dans les 7 jours<br>
                <input type="radio" name="groupe4" value="Sous 30 jours" checked> Sous 30 jours<br>
                <input type="radio" name="groupe4" value="De 1 à 3 mois" checked> De 1 à 3 mois<br>
                <input type="radio" name="groupe4" value="Plus de 3 mois" checked> Plus de 3 mois<br>
                <input  type="reset" value="Reset" />
                <input  type="submit" value="Next" />
            </div>
            
        </div>
    </body>
    </html>