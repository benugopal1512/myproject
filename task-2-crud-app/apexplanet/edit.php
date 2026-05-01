<?php
include "config.php";

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM posts WHERE id=$id");
$row = $res->fetch_assoc();

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: dashboard.php");
}
?>

<form method="post">
<input name="title" value="<?php echo $row['title']; ?>">
<textarea name="content"><?php echo $row['content']; ?></textarea>
<button name="update">Update</button>
</form>