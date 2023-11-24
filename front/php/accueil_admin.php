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
    ?>
    <section id="products_body">
        <div class="Categories">
            <div class="categorie">
            <a href=""><img src="../assets/img/arduino.jpg" alt=""></a> 
                <p>Arduino</p>
            </div>
            <div class="categorie">
            <a href=""><img src="../assets/img/arduino.jpg" alt=""></a> 
                <p>Raspberry</p>
            </div>
            <div class="categorie">
            <a href=""><img src="../assets/img/arduino.jpg" alt=""></a> 
                <p>Arduino</p>
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
        <div class="ajouter">
                <a href="">Ajouter produits</a>
                <a href="">Ajouter categorie</a>
            </div>
        </section>

            <div class="container mt-5">
                <div class="row">

                <div class="container mt-5">
                <div class="row">
                    <!-- Product Card 1 -->
                    <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1.</p>
                        <div class="d-flex justify-content-between">
                            <a href="modifier.php" class="btn btn-primary">Modifier</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal1">Supprimer</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2.</p>
                        <div class="d-flex justify-content-between">
                            <a href="modifier.php" class="btn btn-primary">Modifier</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal2">Supprimer</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Product Card 3 -->
                    <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2.</p>
                        <div class="d-flex justify-content-between">
                            <a href="modifier.php" class="btn btn-primary">Modifier</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal2">Supprimer</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Delete Modal 1 -->
                <div class="modal fade" id="deleteModal1" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel1">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete Product 1?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Delete Modal 2 -->
                <div class="modal fade" id="deleteModal2" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel2">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete Product 2?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
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