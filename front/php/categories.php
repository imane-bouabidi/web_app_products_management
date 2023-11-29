<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/accueil.css">
    <title>Accueil</title>
</head>
<body>
    <?php
        include_once('header_admin.php');
        @include_once '../../back/connexion.php';
        $request = "SELECT * FROM categorie";
        $stmt = mysqli_query($conn,$request);    
    ?>
    <section id="products_body">
            <div class="ajouter">
                <a href="ajouter_cat.php">Ajouter categorie</a>
            </div>

        </section>

            <div class="container mt-5">
                <div class="row">
                    <div class="container mt-5">
                        <div class="row">
                            <?php
                                while($row = mysqli_fetch_assoc($stmt)){
                                    $nom = $row['nom'];
                                    $desc = $row['description'];
                                    $img = $row['image'];
                            ?>
                            <!-- Product Card 1 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="../assets/img/<?php echo $img; ?>" class="card-img-top" alt="Product Image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $nom; ?></h5>
                                        <p class="card-text"><?php echo $desc; ?></p>
                                        <div class="d-flex justify-content-between">
                                            <a href="modifier_cat.php?edit_cat=<?php echo $row['nom']; ?>" class="btn btn-primary">Modifier</a>
                                            <a href="action_cat.php?delete=<?php echo $row['nom']; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
                
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  </div>
</div>
<?php
    include_once('footer.php');

?>

</body>
</html>