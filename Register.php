<?php
    @include 'config.php';
    mysqli_select_db($con,$db);
    if(isset($_POST['sign_up'])){
        
    }
?>







<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <div class="Mainpage">
        <ul class="navbar" style="position:relative ;" >
            <li><img src="md_5adddb58e8b36.jpg" style="height:48px;"> </li>
            <li><a class="active" href="Acceuil.php">Accueil</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <div class="loginbar">
            <form method="post" id="se_connecter" class="input-group" action="Utilisateur.php">
                <input type="text" name="nom" class="intput-field" placeholder="nom de l'animale" required>
                <input type="text" name="nom" class="intput-field" placeholder="Espece" required>
                <input type="text" name="nom" class="intput-field" placeholder="age" required>
                <input type="radio" id="Female" name="genre" value="Female" required>
                <label for="Female">Female</label>
                <input type="radio"id="Male" name="genre" value="Male" required>  
                <label for="Male">Male</label> 
                <button type="submit" name="sign_up" class="submit-btn">S'inscrire</button>
            </form>