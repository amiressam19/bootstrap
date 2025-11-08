<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php include("nav.php") ?>
    <h2>Cafeteria</h2>
    <form action="check_login.php" method="POST">
        Email: <input type="text" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
