<?php
    session_start();
    $id =$_SESSION['id'];
    @include_once '../../back/connexion.php';

    if(isset($_POST['submit'])){
        $img = $_FILES['productImage']['name'];
        $name = $_POST['productName'];
        $categorie=$_POST['productCategory'];
        $min_quantity=$_POST['minQuantity'];
        $stock_quantity=$_POST['stockQuantity'];
        $unitPrice=$_POST['unitPrice'];
        $offre_prix=$_POST['offre_prix'];
        $prix_achat=$_POST['prix_achat'];
        $code_barre=$_POST['code_barre'];
        $description=$_POST['description'];
        $productCategory=$_POST['productCategory'];
        $pro_img_tmp = $_FILES['productImage']['tmp_name'];
        $pro_image_folder = '../assets/img/'.$img;


        $request = "INSERT INTO products(ettiquette,code_barre,prix_achat,prix_final,description,quantité_min,quantité_stock,offre_prix,categorie,image)
            VALUES('$name','$code_barre','$prix_achat','$unitPrice','$description','$min_quantity','$stock_quantity','$offre_prix','$productCategory','$img')";
        $stmt = mysqli_query($conn, $request);
            if($stmt){
                move_uploaded_file($pro_img_tmp,$pro_image_folder);
                header('location: accueil_admin.php');
            }else{
                die("Échec de la connexion : " . $connexion->connect_error);
            }
    }


// -----------------------Modifier Product----------------------------------


if(isset($_POST['modifier_pro'])){
        $img = $_FILES['productImage']['name'];
        $name = $_POST['productName'];
        $categorie=$_POST['productCategory'];
        $min_quantity=$_POST['minQuantity'];
        $stock_quantity=$_POST['stockQuantity'];
        $unitPrice=$_POST['unitPrice'];
        $offre_prix=$_POST['offre_prix'];
        $prix_achat=$_POST['prix_achat'];
        $code_barre=$_POST['code_barre'];
        $description=$_POST['description'];
        $productCategory=$_POST['productCategory'];
        $pro_img_tmp = $_FILES['productImage']['tmp_name'];
        $pro_image_folder = '../assets/img/'.$img;


        $request = "UPDATE products 
        SET ettiquette = '$name',
            code_barre = '$code_barre',
            prix_achat = '$prix_achat',
            prix_final = '$unitPrice',
            description = '$description',
            quantité_min = '$min_quantity',
            quantité_stock ='$stock_quantity',
            offre_prix = '$offre_prix',
            categorie = '$productCategory',
            image = '$img'
        WHERE reference = '$id'";

        $stmt = mysqli_query($conn, $request);

        if ($stmt) {
        move_uploaded_file($pro_img_tmp, $pro_image_folder);
        header('location: accueil_admin.php');
        } else {
        die("Échec de la connexion : " . mysqli_error($conn));
        }
    }

?>







<!-- ------------------------------Supprimer produit------------------------------------- -->
<?php
if (isset($_GET['delete'])) {
    $id_pro = $_GET['delete'];
    $request = "DELETE FROM products WHERE reference = '$id_pro' ";
    $stmt = mysqli_query($conn,$request);  
    if ($stmt) {
        header('location: accueil_admin.php');
        } else {
        die("Échec : " . mysqli_error($conn));
        }
}
  ?>