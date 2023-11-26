<?php

    @include_once '../../back/connexion.php';

    if(isset($_POST['submit'])){
        $email = $_POST['user_email'];
        $pass = $_POST['user_pass'];
        $login=$_POST['user_login'];
        $active=$_POST['active_account'];

        $request = "INSERT INTO users(email,password,login,active_account)
            VALUES('$email','$pass','$login','$active')";
        $stmt = mysqli_query($conn, $request);
            if($stmt){
                header('location:ajouter_user.php');
                // echo '<p>User added!</p>';
            }else{
                die("Échec de la connexion : " . $connexion->connect_error);
            }
    }


?>