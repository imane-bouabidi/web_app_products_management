<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/accueil.css">
  <title>Liste des Utilisateurs</title>
</head>
<body>
<?php
        include_once('header_admin.php');
        @include_once '../../back/connexion.php';
        $request = "SELECT * FROM users";
        $stmt = mysqli_query($conn,$request);   
    ?>
            <div class="ajouter">
                <a href="ajouter_user.php">Ajouter user</a>
            </div>
<div class="container mt-5">
  <h2>Liste des Utilisateurs</h2>

  <table class="table">
    <thead>
      <tr>
        <th>Login</th>
        <th>Email</th>
        <th>Mot de Passe</th>
        <th>Compte Validé</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Remplacez ces données fictives par les données de votre base de données -->
      <?php
          while($row = mysqli_fetch_assoc($stmt)){
      ?>
      <tr>
        <td><?php echo $row['login'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['active_account'] ?></td>
        <td>
          <button type="button" class="btn btn-success">Valider</button>
          <button type="button" class="btn btn-danger">Supprimer</button>
          <button type="button" class="btn btn-primary">Promouvoir Admin</button>
        </td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
    include_once('footer.php');
?>

</body>
</html>
