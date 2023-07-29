<?php
session_start();

$valid_username = 'gopal';
$valid_password = 'gopal';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;

        if (isset($_POST['remember'])) {
            $cookie_name = 'remember_me_cookie';
            $cookie_value = $username;
            $cookie_expiry = time() + (30 * 24 * 60 * 60);
            setcookie($cookie_name, $cookie_value, $cookie_expiry, '/');
        }

        echo "
        <script>
            alert('Login successful');
        </script>
        ";
        exit;
    } else {
        echo 'Invalid credentials. Please try again.';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h2>Login Page</h2>
    <form action="" method="post">
        Username:
        <br>
        <input type="text" name="username" required><br>
        Password:
        <br>
        <input type="password" name="password" required><br><br>
        <input type="checkbox" name="remember">Remember me<br>
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>