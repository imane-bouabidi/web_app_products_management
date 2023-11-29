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
        include_once('header.php');
        @include_once '../../back/connexion.php';
        $request = "SELECT * FROM categorie";
        $stmt = mysqli_query($conn,$request);   
        // $nom = $row['nom'];
    ?>
    <section id="products_body">
        <div class="Categories">
          <?php while($row = mysqli_fetch_assoc($stmt)){?>
            <div class="categorie">
            <a href=""><img src="../assets/img/<?php echo $row['image']?>" alt=""></a> 
                <p><?php echo $row['nom'] ?></p>
            </div>
          <?php
            }
          ?>

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


  </div>
</div>
<?php
    include_once('footer.php');
?>
</body>
</html>