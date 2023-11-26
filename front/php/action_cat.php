<?php
    session_start();
    @include_once '../../back/connexion.php';
    $nom =$_SESSION['nom'];
    if(isset($_POST['submit'])){
        $img = $_FILES['catImage']['name'];
        $name = $_POST['catName'];
        $catDescription=$_POST['catDescription'];
        $cat_img_tmp = $_FILES['catImage']['tmp_name'];
        $cat_image_folder = '../assets/img/'.$img;

        $request = "INSERT INTO categorie(nom,description,image)
            VALUES('$name','$catDescription','$img')";
        $stmt = mysqli_query($conn, $request);
            if($stmt){
                move_uploaded_file($cat_img_tmp,$cat_image_folder);
            }else{
                die("Échec de la connexion : " . $connexion->connect_error);
            }
    }


    

// -----------------------Modifier Categorie----------------------------------


if (isset($_POST['update_categorie'])) {
    $img = $_FILES['catImage']['name'];
    $name = $_POST['catName'];
    $catDescription = $_POST['catDescription'];
    $cat_img_tmp = $_FILES['catImage']['tmp_name'];
    $cat_image_folder = '../assets/img/' . $img;

    $request = "UPDATE categorie 
                SET nom = '$name',
                    description = '$catDescription',
                    image = '$img'
                WHERE nom  LIKE '%$nom%'";
    
    $stmt = mysqli_query($conn, $request);
    
    if ($stmt) {
        move_uploaded_file($cat_img_tmp, $cat_image_folder);
    } else {
        die("Échec de la connexion : " . mysqli_error($conn));
    }
}



?>