<?php
//Session starts here



?><!DOCTYPE HTML>
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
			<!----Initializing Session for errors--->
                    <?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </span>
                <form action="page2_form.php" method="post">


                  <label for="">Quel service de nettoyage souhaitez-vous ?</label><br>

            <input type="radio" name="group1" value="Nettoyage de bureaux"> Nettoyage de bureaux<br>
            <input type="radio" name="group1" value="Nettoyage de commerces" checked> Nettoyage de commerces<br>
            <input type="radio" name="group1" value="Nettoyage industriel"> Nettoyage industriel<br>
            <input type="radio" name="group1" value="Nettoyage d'hôtel / hôpital / lieu d'hébergement"> Nettoyage d'hôtel / hôpital / lieu d'hébergement<br>
            <hr>
           

                    <input  type="reset" value="Reset" />
                    <input  type="submit" value="Next" />

                </form>
            </div>

        </div>
    </body>
</html>