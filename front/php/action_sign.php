<?php
include_once('../../back/connexion.php');
$admin=0;
if(isset($_POST['submit_signin']) && isset($_POST['is_admin'])){
    $requette = "SELECT * FROM `admin`";
    $stmt = mysqli_query($conn,$requette);
    while($row = mysqli_fetch_assoc($stmt)){
        if($row['login'] == $_POST['login'] && $row['password'] == $_POST['password']){
            $admin=1;
            header('Location:accueil_admin.php');
            exit();
        }
    }
    if($admin==0){
        // echo '<script type="text/javascript">alert("login ou pass incorrecte !!");</script>';
        header('Location:index.php');
    }
}


$user=0;
if(isset($_POST['submit_signin']) && !isset($_POST['is_admin'])){
    $requette = "SELECT * FROM `users`";
    $stmt = mysqli_query($conn,$requette);
    while($row = mysqli_fetch_assoc($stmt)){
        if($row['login'] == $_POST['login'] && $row['password'] == $_POST['password'] && $row['active_account']==1){
            $user=1;
            header('Location:accueil.php');
            exit();
        }
    }
    if($user==0){
        // echo '<script type="text/javascript">alert("login ou pass incorrecte !!");</script>';
        header('Location:index.php');
    }
}



if(isset($_POST['sign_up']) && isset($_POST['login'])){
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $requette = "INSERT INTO `users`(email,password,login)
    VALUES('$email','$password','$login')";
    $stmt = mysqli_query($conn,$requette);
    if($stmt){
        header('Location:after_sign_up.php');
    }else{
        die('Error :' . mysqli_error($conn));
    }
}

?>