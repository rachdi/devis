
<?php
session_start();
//now, let's register our session variables
// session_register('groupe3');
$_SESSION['group1'];
$_SESSION['group2'];
$_SESSION['groupe3'];
$_SESSION['groupe4'];
$_POST['email'];


$msg= $_SESSION['group1'].'\n'
.$_SESSION['group2'].'\n'
.$_SESSION['groupe3'].'\n'
.$_SESSION['groupe4'].'\n'
.$_POST['email'];
mail('bassemrachdi1@gmail.com', 'Devis', $msg);
echo "Votre msg est bien envoyer vous recevez un devis bientot <a href='page1_form.php'>click ici</a> pour refaire un autre devis" ;





?>