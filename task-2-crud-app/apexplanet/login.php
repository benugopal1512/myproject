<?php
include "config.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $res->fetch_assoc();

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    }
}
?>

<form method="post">
<input name="username" required>
<input name="password" type="password" required>
<button name="login">Login</button>
</form>