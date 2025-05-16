<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM activitylist WHERE ActID=$id");
$row = $result->fetch_assoc();
?>

<form method="POST" action="edit.php?id=<?php echo $id; ?>">
    <input type="text" name="title" value="<?php echo $row['ActTitle']; ?>"><br>
    <textarea name="desc"><?php echo $row['ActDesc']; ?></textarea><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $conn->query("UPDATE activitylist SET ActTitle='$title', ActDesc='$desc' WHERE ActID=$id");
    header("Location: index.php");
}
?>