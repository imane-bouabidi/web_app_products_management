<?php
include_once('../../back/connexion.php');
$email = $_GET['valider'];

$_requette = "UPDATE users SET active_account = 1 where email = '$email'";
$stmt = mysqli_query($conn,$_requette);
if($stmt){
    $email = "";
    header('Location:users.php');
}else{
    die("Érreur : " . mysqli_error($conn));
}


// ----------------------supprimer compte-------------------------------

$email_supp = $_GET['supprimer'];

$supp_requette = "DELETE FROM users where email = '$email_supp'";
$stmt = mysqli_query($conn,$supp_requette);
if($stmt){
    $email_supp = "";
    header('Location:users.php');
}else{
    die("Érreur : " . mysqli_error($conn));
}

// ----------------------rendre user admin-------------------------------

$user_admin = $_GET['rendre_admin'];

$get_data = "SELECT * FROM users where email = '$user_admin'";
$stmt = mysqli_query($conn,$get_data);
if($stmt){
    while($row = mysqli_fetch_assoc($stmt)){
        $login = $row['login'];
        $email = $row['email'];
        $password = $row['password'];
        $active = $row['active_account'];
    }
    $get_data = "INSERT INTO admin(email,password,login) VALUES('$email','$password','$login');";
    $stmt2 = mysqli_query($conn,$get_data);
    if($stmt2){
        $delete_user = "DELETE FROM users WHERE email = '$email';";
        $stmt3 = mysqli_query($conn,$delete_user);
        header('Location:users.php');
    }else{
        die("Érreur : " . mysqli_error($conn));
    }
}else{
    die("Érreur : " . mysqli_error($conn));
}
?>