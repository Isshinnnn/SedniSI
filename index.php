<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $valid_user = "admin";
    $valid_pass = "1234";

    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION["user"] = $username;
        header("Location: sedni.html");
        exit();
    } else {
        $error = "Neplatné uživatelské jméno nebo heslo!";
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SedniSi - Domů</title>
    <link rel="stylesheet" href="sedni.css">
    <style>
        body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(to right, #ffc0cb, #ffeb99);
        }
    </style>
</head>
<body>

<div class="login-container">

    <?php if ($error) echo "<p class='error'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="username" placeholder="e-mail" required>
        <input type="password" name="password" placeholder="Heslo" required>
        <button type="submit">Přihlásit se</button>
    </form>
</div>

</body>
</html>
