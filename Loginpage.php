<?php
    @include 'config.php';
    mysqli_select_db($con,$db);

    if(isset($_POST['login'])){
        $nomU=$_POST['nom_utilisateur'];
        $motP=$_POST['mot_dePasse'];

        $sql="select * from utilisateur where nom_utilisateur='".$nomU."' and Mot_dePasse='".$motP."'";

        $result=mysqli_query($con,$sql);  
        if(mysqli_num_rows($result)===1){
            header('location: Utilisateur.php');
            exit();
        }
        else{
            $error[]='nom d utilisateur ou mot de passe est faux';
        }
    }
    if (isset($_POST['sign_up'])) {
        $prenomL = $_POST['prenomL'];
        $nomL = $_POST['nomL'];
        $nomUL = $_POST['nom_utilisateurL'];
        $EmailL = $_POST['EmailL'];
        $TelephoneL = $_POST['telephoneL'];
        $motPL = $_POST['mot_dePasseL'];
        $req_Insert = "INSERT INTO utilisateur(Prenom,Nom,nom_utilisateur,email,Telephone,mot_dePasse) 
        VALUES('$prenomL','$nomL','$nomUL','$EmailL','$TelephoneL','$motPL')";
        header('location: Register.php');
        if (mysqli_query($con, $req_Insert)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $req_Insert . "<br>" . mysqli_error($con);
          }
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
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="se_connecter()">connecter</button>
                <button type="button" class="toggle-btn" onclick="S_inscrire()">S'inscrire</button>
            </div>
            <form method="post" id="se_connecter" class="input-group">
                <input type="text" class="intput-field" name="nom_utilisateur" placeholder="Nom d'Utilisateur" required>
                <input type="password" class="intput-field" name="mot_dePasse" placeholder="Mot de passe" required><br><br>
                <button type="submit" name="login" class="submit-btn">Se connecter</button>
            </form>
            <form method="post"  id="S_inscrire" class="input-group">
                <input type="text" class="intput-field" id="prenomL" name="prenomL" placeholder="Prenom" required>
                <input type="text" class="intput-field" id="nomL" name="nomL" placeholder="Nom" required>
                <input type="text" class="intput-field" id="nom_utilisateurL" name="nom_utilisateurL" placeholder="Nom d'Utilisateur" required>
                <input type="email" class="intput-field" id="EmailL" name="EmailL" placeholder="E-mail" required>
                <input type="text" class="intput-field" id="telephoneL" name="telephoneL" placeholder="numero Telephone" required>
                <input type="password" class="intput-field"id="mot_dePasseL" name="mot_dePasseL" placeholder="Mot de passe" required>
                <button type="submit" name="sign_up" class="submit-btn">S'inscrire</button>
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("se_connecter");
        var y=document.getElementById("S_inscrire");
        var z=document.getElementById("btn");
        
        function S_inscrire(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function se_connecter(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
</body>
</html>