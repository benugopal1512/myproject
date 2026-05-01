<?php
include "config.php";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users(username,password) VALUES('$username','$password')");
    header("Location: login.php");
}
?>

<form method="post">
<input name="username" placeholder="username" required>
<input name="password" type="password" placeholder="password" required>
<button name="register">Register</button>
</form>