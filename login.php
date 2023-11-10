<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="Styles/login.css">
    <meta charset="utf-8">
</head>
<body>
    <div id="login">
    <h1>Intra in cont</h1>
        <form method="post" action="Login1.php" name="login1" value="login1">
            <label for="email">Email:</label>
            <input type="varchar" name="email"><br>
            <label for="parola">Parola:</label>
            <input type="password" name="parola"><br>
            <input type="submit" value="Login" name="login1">
        </form>
    </div>
    <div id="register">
        <h1>Inregistreaza-te</h1>
        <form method="post" action="Register.php" name="register" value="Register">
            <label for="nume">Nume:</label>
            <input type="varchar" name="nume"><br>
            <label for="prenume">Prenume:</label>
            <input type="varchar" name="prenume"><br>
            <label for="email">Email: </label>
            <input type="varchar" name="email"><br>
            <label for="parola">Parola:</label>
            <input type="password" name="parola"><br>
            <input type="submit" value="Register" name="register">
        </form>
    </div>
</body>