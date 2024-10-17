<?php
// CORS-Header setzen, um Anfragen nur von einer bestimmten Domain zuzulassen
// header("Access-Control-Allow-Origin:  http://localhost:3000, https://getpeer.eu/graphql");

// CORS-Header für die Preflight-Anfrage (OPTIONS) setzen
// header("Access-Control-Allow-Origin: http://localhost:3000"); // Erlaubt Anfragen von localhost:3000
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");  // Erlaubt HTTP-Methoden wie GET, POST und OPTIONS
// header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Erlaubt spezifische Header, einschließlich Authorization

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
// header('Access-Control-Max-Age: 600');

// header("Referrer-Policy: no-referrer");


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierungsbildschirm</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="placeholder"></div>
        <div class="logo"></div>
        <form class="form-container">
            <h1 class="heading">Get started!</h1>
            <p class="description">Almost like with any social media you can share the content you love, but with peer, you earn on the side – no fame needed!</p>
            <div class="input-field">
                <input type="text" id="username" class="input-text" placeholder="Username" required></input>
            </div>
            <div class="input-field">
                <input type="email" id="email" name="email" placeholder="E-Mail" required class="input-text"></input>
            </div>
            <br>
            <div class="input-field">
                <input type="password" id="password" name="password" placeholder="Passwort" required class="input-text"></input>
            </div>
            <div class="input-field">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required class="input-text"></input>
            </div>
            <p class="description" style="text-align: right;">Forgot Password?</p>
            <div class="button">Registrieren</div>
            <div class="signIn">
                <span class="description">Already have an account?</span>
                <a class="link" href="login.php">Sign in</a>
            </div>
            <p class="description" style="opacity: 0;">Start posting with peer today!</p>
        </form>
    </div>
</body>
</html>
