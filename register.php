<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Registrierung</title>
    <link rel="stylesheet" href="register.css">
    <script src="register.js?<?php echo filemtime('register.js'); ?>"></script>

</head>
<body>

    <div class="container">
        <h2>Registrieren</h2>
        <form action="/register" method="post">
            <div class="form-group">
                <label for="username">Benutzername</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Passwort bestätigen</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="form-group">
                <button type="submit">Registrieren</button>
            </div>
        </form>

        <div class="login-link">
            <p>Schon ein Konto? <a href="/login">Hier anmelden</a></p>
        </div>
    </div>

</body>
</html>

