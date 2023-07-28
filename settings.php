<?php session_start(); ?>

<?php require_once 'views/header.php' ?>

<form action ="#" method="POST">
<label for="numArticles">nombre d'articles:</label>
<select name="numArticles" id="numArticles">
    <option value="6">6 articles</option>
    <option value="9">9 articles</option>
    <option value="12">12 articles</option>
</select>
<input type="submit" value="Afficher" class="button">
</form>
<main>

<?php

if(isset($_POST['numArticles'])){
    $_SESSION['choice'] = $_POST['numArticles'];
    var_dump($_SESSION['choice']);
} 

?>