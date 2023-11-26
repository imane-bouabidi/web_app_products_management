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
    session_start();
    $nom_cat = $_GET['edit_cat'];
    $_SESSION['nom'] = $nom_cat;
    include_once('header_admin.php');
    @include_once '../../back/connexion.php';
    $request = "SELECT * FROM categorie WHERE nom = '$nom_cat' ";
    $stmt = mysqli_query($conn,$request);  
  ?>
  <div class="container mt-5">
    <h2>Modifier categorie</h2>

    <form action="action_cat.php" method="post" enctype="multipart/form-data">

    <?php
      while($row = mysqli_fetch_assoc($stmt)){
    ?>
      <!-- Titre du Produit -->
      <div class="form-group">
        <label for="catName">Titre du Categorie:</label>
        <input type="text" class="form-control" id="catName" name="catName" value="<?php echo $row['nom']; ?>">
      </div>

      <!-- Description du Categorie -->
      <div class="form-group">
        <label for="catDescription">Description du Categorie:</label>
        <input required type="text" class="form-control" id="catDescription" name="catDescription" value="Description du Categorie">
      </div>

      <!-- Choisir une image -->
      <div class="form-group">
        <label for="catImage">Image du Categorie :</label>
        <img class="w-8" src="../assets/img/<?php echo $row['image']; ?>.png" class="card-img-top" alt="categorie Image">
        <input type="file" class="form-control-file" id="catImage" name="catImage">
      </div>
      <?php
        }
      ?>
      <!-- Bouton Soumettre -->
      <button type="submit" name="update_categorie" class="btn btn-primary">Soumettre</button>
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
