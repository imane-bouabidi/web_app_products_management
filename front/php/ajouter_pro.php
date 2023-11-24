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
        include_once('header.php');
    ?>
<div class="container mt-5">
  <h2>Ajouter un Produit</h2>

  <form action="action_product.php" method="post" enctype="multipart/form-data">
    <!-- Choisir une image -->
    <div class="form-group">
      <label for="productImage">Image du Produit:</label>
      <input type="file" class="form-control-file" id="productImage" name="productImage">
    </div>

    <!-- Titre du Produit -->
    <div class="form-group">
      <label for="productName">Titre du Produit:</label>
      <input type="text" class="form-control" id="productName" name="productName" value="Nom du Produit">
    </div>

    <!-- Quantité Minimum -->
    <div class="form-group">
      <label for="minQuantity">Quantité Minimum:</label>
      <input type="number" class="form-control" id="minQuantity" name="minQuantity" value="10">
    </div>

    <!-- Quantité en Stock -->
    <div class="form-group">
      <label for="stockQuantity">Quantité en Stock:</label>
      <input type="number" class="form-control" id="stockQuantity" name="stockQuantity" value="50">
    </div>

    <!-- Prix Unitaire -->
    <div class="form-group">
      <label for="unitPrice">Prix Unitaire:</label>
      <input type="number" step="0.01" class="form-control" id="unitPrice" name="unitPrice" value="19.99">
    </div>

    <!-- Catégorie -->
    <div class="form-group">
      <label for="productCategory">Catégorie:</label>
      <select class="form-control" id="productCategory" name="productCategory">
        <option value="Electronique">Electronique</option>
        <option value="Vêtements">Vêtements</option>
        <option value="Alimentation">Alimentation</option>
        <!-- Ajoutez d'autres options de catégorie selon vos besoins -->
      </select>
    </div>

    <!-- Bouton Soumettre -->
    <button type="submit" class="btn btn-primary">Soumettre</button>
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
