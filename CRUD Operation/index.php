<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Activity List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f4f4f4;
    }

    h2,
    h3 {
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
    }

    table,
    th,
    td {
      border: 1px solid #ccc;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #eee;
    }

    a {
      color:rgb(255, 0, 123);
      text-decoration: none;
      padding: 8px 16px;
      background-color:rgb(177, 31, 158);
      border: none;
      color: white;
      cursor: pointer;
      border-radius: 4px;
    }

    a:hover {
      /* text-decoration: underline; */
      background-color:rgb(112, 10, 68);
    }

    form {
      margin-top: 20px;
      background-color: #eee;
      padding: 15px;
      border: 1px solid #ccc;
      width: 300px;
      
    }

    input[type="text"],
    textarea {
      width: 90%;
      padding: 8px;
      margin: 5px 0 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 8px 16px;
      background-color:rgb(8, 8, 8);
      border: none;
      color: white;
      cursor: pointer;
      border-radius: 4px;
    }

    button:hover {
      background-color:rgb(102, 1, 234);
    }
  </style>
</head>

<body>

  <h2>Activity List</h2>
  <table>
    <tr>
      <th>Sl.No.</th>
      <th>Title</th>
      <th>Description</th>
      <th>Actions</th>
    </tr>
    <?php
    $result = $con->query("SELECT * FROM activitylist");
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>$i</td>
        <td>{$row['ActTitle']}</td>
        <td>{$row['ActDesc']}</td>
        <td>
            <a href='edit.php?id={$row['ActID']}'>Edit</a> |
            <a href='delete.php?id={$row['ActID']}'>Delete</a>
        </td>
    </tr>";
      $i++;
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
