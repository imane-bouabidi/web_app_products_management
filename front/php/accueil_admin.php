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
    session_start();
        include_once('header_admin.php');
        @include_once '../../back/connexion.php';
        $request = "SELECT * FROM categorie";
        $stmt = mysqli_query($conn,$request);   
    ?>
    <section id="products_body">
        <div class="Categories">
        <div class="Categories">
          <?php while($row = mysqli_fetch_assoc($stmt)){?>
            <div class="categorie">
            <a href=""><img src="../assets/img/<?php echo $row['image']?>" alt=""></a> 
                <p><?php echo $row['nom']?></p>
            </div>
          <?php
            }
          ?>

        </div>

            <div class="ajouter">
                <a href="ajouter_pro.php">Ajouter produits</a>
            </div>
        </div>
        <div class="filtres">
            <h2>Prix</h2>
            <div class="chekbox-div">
                <input type="radio" id="Pas_chere" name="Pas_chere">
                <label for="Pas_chere">Pas chere</label>
            </div>
            <div class="chekbox-div">
                <input type="radio" id="Bon" name="Bon">
                <label for="Bon">Bon</label>
            </div>
            <div class="chekbox-div">
                <input type="radio" id="chere" name="chere">
                <label for="chere">Chere</label>
            </div>
            <div class="chekbox-div">
                <input type="checkbox" id="solde" name="solde">
                <label for="solde">Offre solde</label>
            </div>
        </div>
        </section>

        <div class="container mt-5">
            <div class="row">
                <div class="container mt-5">
                    <div class="row">
                    <?php
                            $req = "SELECT * FROM products";
                            $stmt2 = mysqli_query($conn,$req);   
                            while($row = mysqli_fetch_assoc($stmt2)){
                                $id = $row['reference'];
                        ?>
                        <!-- Product Card 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../assets/img/<?php echo $row['image']; ?>" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['ettiquette']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a href="modifier.php?edit=<?php echo $row['reference']; ?>" class="btn btn-primary">Modifier</a>
                                        <a href="action_product.php?delete=<?php echo $id; ?>"><button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal1">Supprimer</button></a>
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