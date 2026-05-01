<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location: login.php");

$res = $conn->query("SELECT * FROM posts");
?>

<a href="create.php">Add Post</a>
<a href="logout.php">Logout</a>

<?php while($row = $res->fetch_assoc()){ ?>
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['content']; ?></p>
    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
<?php } ?>