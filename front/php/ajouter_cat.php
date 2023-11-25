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

    <form action="action_cat.php" method="post" enctype="multipart/form-data">

        <!-- Titre du Produit -->
        <div class="form-group">
          <label for="catName">Titre du Categorie:</label>
          <input required type="text" class="form-control" id="catName" name="catName" placeholder="Nom du Categorie">
        </div>
        
        
        <!-- Description du Categorie -->
        <div class="form-group">
          <label for="catDescription">Description du Categorie:</label>
          <input required type="text" class="form-control" id="catDescription" name="catDescription" placeholder="Description du Categorie">
        </div>

          <!-- Choisir une image -->
      <div class="form-group">
        <label for="catImage">Image du Categorie:</label>
        <input required type="file" accept="image/png, image/jpg" class="form-control-file" id="catImage" name="catImage">
      </div>

      <!-- Bouton Soumettre -->
      <button type="submit" name="submit" class="btn btn-primary">Soumettre</button>
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
