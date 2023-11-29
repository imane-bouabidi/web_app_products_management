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
            <h1>Sign In</h1>
        </div>
        <input type="text" name="login" placeholder="User Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="chekbox-div">
            <input name="is_admin" type="checkbox" id="admin" name="admin">
            <label for="admin">Je suis admin</label>
        </div>
        <input type="Submit" name="submit_signin" value="S'authentifier">
        <div class="sign_up">
            <p>Nouveau ici ?, <a href="sign_up.php">Sign Up</a></p>
        </div>
    </form>
</body>
</html>