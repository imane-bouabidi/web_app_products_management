<?php
    session_start();
    @include_once '../../back/connexion.php';
 
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
                header('location: categories.php');
            }else{
                die("Échec de la connexion : " . $connexion->connect_error);
            }
    }


    

// -----------------------Modifier Categorie----------------------------------

$nom =$_SESSION['nom_cat'];
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
                WHERE nom like '%$nom%'";
    
    $stmt = mysqli_query($conn, $request);
    
    if ($stmt) {
        move_uploaded_file($cat_img_tmp, $cat_image_folder);
        header('location: categories.php');
    } else {
        die("Échec de la connexion : " . mysqli_error($conn));
    }
}



?>


<!-- ------------------------------Supprimer categorie------------------------------------- -->
<?php
    $nom_cat = $_GET['delete'];
    $request = "DELETE FROM categorie WHERE nom like '%$nom_cat%' ";
    $stmt = mysqli_query($conn,$request);  
    if ($stmt) {
        header('location: categories.php');
        } else {
        die("Échec : " . mysqli_error($conn));
        }
  ?>