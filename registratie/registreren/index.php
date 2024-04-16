<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
</head>
<body>
    <form action="../../backend/app/Http/Controllers/userController.php" method="POST">
        <input type="hidden" name="action" value="register">
        <div>
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>
        </div>
        <div>
            <label for="achternaam">Achternaam:</label>
            <input type="text" id="achternaam" name="achternaam" required>
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="afdeling">Afdeling:</label>
            <input type="text" id="afdeling" name="afdeling" required>
        </div>
        <button type="submit">Registreren</button>
    </form>
</body>
</html>
