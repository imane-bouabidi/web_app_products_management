<!-- modifier_produit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Modifier un Produit</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php
    include_once('header.php');
  ?>
  <div class="container mt-5">
    <h2>Ajouter une categorie</h2>

    <form action="action_product.php" method="post" enctype="multipart/form-data">

      <!-- Titre du Produit -->
      <div class="form-group">
        <label for="productName">Titre du Categorie:</label>
        <input type="text" class="form-control" id="productName" name="productName" placeholder="Nom du Categorie">
      </div>

      <!-- Bouton Soumettre -->
      <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
  </div>

  <?php
    include_once('footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
