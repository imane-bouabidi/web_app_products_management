<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Authentification</title>
</head>
<body>
    
    <form action="index_action.php">
        <div class="title">
            <h1>Sign Up</h1>
        </div>
        <input type="text" placeholder="User Name" required>
        <input type="Email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <input type="Submit" value="S'authentifier" link="accueil.php">
        <div class="sign_up">
            <p>Deja membre ?, <a href="index.php">Sign In</a></p>
        </div>
    </form>
</body>
</html>