<!DOCTYPE html>
<html>
<head>
    <title>iniciar seccion </title>
</head>
<body>
    <h2>iniciar sección </h2>
    <form action="login.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// Database connection
$conn = new mysqli("localhost", "root", "43639249", "prueba1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database for user credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

$fila= mysqli_num_rows($result) ;
if ($fila) {
    header("location:MENU.PHP") ;
}
else {
    echo "" ;
}



$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>bienvenido</title>
</head>
<body>
    <h2> No tienes cuenta?<?php echo $_SESSION['username']; ?>!</h2>
    <a href="CREAR.php">CREAR</a>
</body>
</html>