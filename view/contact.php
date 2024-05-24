<?php
include 'header.php';
?>

<form action="" method="post">

    <label for="username">Pseudo</label>
    <input type="text" name="username" id="username" required>

    <label for="username">Prénom</label>
    <input type="text" name="name" id="name" required>

    <label for="username">Mail</label>
    <input type="mail" name="name" id="name" required>

    <select class="form-select" >
        <option selected>Catégories</option>
        <option value="1">Mot de passe oublié</option>
        <option value="2">Problème de connexion</option>
        <option value="3">Desk invalide</option>
    </select>

    <label for="commentaire">Commentaire </label>
    <textarea id="commentaire"></textarea>

    <input type="submit" value="contacter">

</form>

<?php
include 'footer.php';
?>