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
            <h1>Sign In</h1>
        </div>
        <input type="text" placeholder="User Name" required>
        <input type="password" placeholder="Password" required>
        <div class="chekbox-div">
            <input type="checkbox" id="admin" name="admin">
            <label for="admin">Je suis admin</label>
        </div>
        <input type="Submit" value="S'authentifier">
        <div class="sign_up">
            <p>Nouveau ici ?, <a href="sign_up.php">Sign Up</a></p>
        </div>
    </form>
</body>
</html>