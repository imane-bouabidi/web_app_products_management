<?php
$serveur = "localhost";
$utilisateur = "root"; 
$motdepasse = "";
$nomdelabase = "electro_nacer_app";

$conn = new mysqli($serveur, $utilisateur, $motdepasse, $nomdelabase);

if ($conn) {
    // echo "Connection ! ";
}else{
    die("Échec de la connexion : " . $connexion->connect_error);
}
?>