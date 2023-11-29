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
    
    <form action="action_sign.php" method="post">
        <div class="title">
            <h1>Sign Up</h1>
        </div>
        <input type="text" name="login" placeholder="User Name" required>
        <input type="Email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="Submit" name="sign_up" value="S'authentifier" link="accueil.php">
        <div class="sign_up">
            <p>Deja membre ?, <a href="index.php">Sign In</a></p>
        </div>
    </form>
</body>
</html>