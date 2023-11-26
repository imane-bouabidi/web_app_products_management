<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Modifier un Produit</title>
</head>
<body>
<?php
    session_start();
    $id = $_GET['edit'];
    $_SESSION['id'] = $id;
    include_once('header_admin.php');
    @include_once '../../back/connexion.php';
    $request = "SELECT * FROM products WHERE reference = '$id' ";
    $stmt = mysqli_query($conn,$request);   
?>
<div class="container mt-5">
  <h2>Modifier un Produit</h2>

  <form action="action_product.php" method="post" enctype="multipart/form-data">
    <?php
      while($row = mysqli_fetch_assoc($stmt)){
    ?>
    <!-- Choisir une image -->
    <div class="form-group">
      <label for="productImage">Image du Produit:</label>
      <img src="../assets/img/<?php echo $row['image']; ?>.png" class="card-img-top" alt="Product Image">
      <input type="file" class="form-control-file" id="productImage" name="productImage">
    </div>

    <!-- Titre du Produit -->
    <div class="form-group">
      <label for="productName">Titre du Produit:</label>
      <input type="text" class="form-control" id="productName" name="productName" value="<?php echo $row['ettiquette']; ?>">
    </div>

    <!-- Description du Produit -->
    <div class="form-group">
      <label for="productName">Description du Produit:</label>
      <input required type="text" class="form-control" id="description" name="description" value="<?php echo $row['description']; ?>">
    </div>
    
    <!-- Code barre du Produit -->
    <div class="form-group">
      <label for="code_barre">Code barre du Produit:</label>
      <input required type="text" class="form-control" id="code_barre" name="code_barre" value="<?php echo $row['code_barre']; ?>">
    </div>

    <!-- Quantité Minimum -->
    <div class="form-group">
      <label for="minQuantity">Quantité Minimum:</label>
      <input required type="number" class="form-control" id="minQuantity" name="minQuantity" value="<?php echo $row['quantité_min']; ?>">
    </div>

    <!-- Quantité en Stock -->
    <div class="form-group">
      <label for="stockQuantity">Quantité en Stock:</label>
      <input required type="number" class="form-control" id="stockQuantity" name="stockQuantity" value="<?php echo $row['quantité_stock']; ?>">
    </div>

    <!-- Prix Unitaire -->
    <div class="form-group">
      <label for="unitPrice">Prix Unitaire:</label>
      <input required type="number" step="0.01" class="form-control" id="unitPrice" name="unitPrice" value="<?php echo $row['prix_final']; ?>">
    </div>
    <!-- Prix Achat-->
    <div class="form-group">
      <label for="prix_achat">Prix Achat:</label>
      <input required type="number" step="0.01" class="form-control" id="prix_achat" name="prix_achat" value="<?php echo $row['prix_achat']; ?>">
    </div>
    <!-- Offre Prix -->
    <div class="form-group">
      <label for="unitPrice">Offre Prix:</label>
      <input required type="number" step="0.01" class="form-control" id="offre_prix" name="offre_prix" value="<?php echo $row['offre_prix']; ?>">
    </div>

    <!-- Catégorie -->
    <div class="form-group">
      <label for="productCategory">Catégorie:</label>
      <select class="form-control" id="productCategory" name="productCategory">
      <?php 
      $req = "SELECT nom FROM categorie";
      $stmt2 = mysqli_query($conn,$req);   
      while($rows = mysqli_fetch_assoc($stmt2)){?>
        <option value="<?php echo $rows['nom'];?>"><?php echo $rows['nom'];?></option>
      <?php
        }
      ?>
      </select>
    </div>
    <?php
        }
    ?>
    <!-- Bouton Soumettre -->
    <button type="submit" name="modifier_pro" class="btn btn-primary">Soumettre</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php
    include_once('footer.php');
?>

</body>
</html>
