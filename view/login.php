<?php
 include 'header.php';
?>

<form action="" method="post">

    <label for="username" >Pseudo</label>
    <input type="text" name="username" id="username" required>

    <label for="password" >Mot de passe</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Connexion">

</form>

<?php 
include 'footer.php';
?>