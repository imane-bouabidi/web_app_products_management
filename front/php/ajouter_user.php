<!-- modifier_produit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Ajouter user</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php
    include_once('header_admin.php');
  ?>
  <div class="container mt-5">
    <h2>Ajouter un user</h2>

    <form action="ajouter_user_action.php" method="post" enctype="multipart/form-data">

        <!-- email -->
        <div class="form-group">
          <label for="user_email">Email</label>
          <input required type="text" class="form-control" id="user_email" name="user_email" placeholder="Email">
        </div>
        
        <!-- password -->
        <div class="form-group">
          <label for="user_pass">Password :</label>
          <input required type="text" class="form-control" id="user_pass" name="user_pass" placeholder="Password">
        </div>
        
        
        <!-- login -->
        <div class="form-group">
          <label for="user_login">Login :</label>
          <input required type="text" class="form-control" id="user_login" name="user_login" placeholder="Login">
        </div>

        <!-- active account -->
        <div class="form-group">
        <label for="active_account">Active account ? :</label>
        <select class="form-control" id="active_account" name="active_account">
            <option value="oui">Oui</option>
            <option value="non">Non</option>
            <!-- Ajoutez d'autres options de catégorie selon vos besoins -->
        </select>
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
