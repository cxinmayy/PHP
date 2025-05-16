<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Activity List</title>
</head>
<body>

<h2>Activity List</h2>
<table border="1">
    <tr>
        <th>Sl.No.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM activitylist");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['ActID']}</td>
            <td>{$row['ActTitle']}</td>
            <td>{$row['ActDesc']}</td>
            <td>
                <a href='edit.php?id={$row['ActID']}'>Edit</a> |
                <a href='delete.php?id={$row['ActID']}'>Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>

<h3>Add Activity</h3>
<form action="add.php" method="POST">
    <input type="text" name="title" placeholder="Title" required><br>
    <textarea name="desc" placeholder="Description" required></textarea><br>
    <button type="submit">Add</button>
</form>

</body>
</html>