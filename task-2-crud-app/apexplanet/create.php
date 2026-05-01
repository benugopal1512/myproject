<?php
include "config.php";

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("INSERT INTO posts(title,content) VALUES('$title','$content')");
    header("Location: dashboard.php");
}
?>

<form method="post">
<input name="title" placeholder="Title" required>
<textarea name="content"></textarea>
<button name="submit">Add</button>
</form>