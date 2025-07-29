<?php include 'db.php'; ?>
<h2><center>Student List</center></h2>
<a href="add.php">Add New Student</a>
<br><br><br>
<table border="1">
    <tr><th>ID</th><th>Name</th><th>Roll</th><th>Class</th><th>Action</th></tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM students");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['roll']}</td>
            <td>{$row['class']}</td>
            <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
        </tr>";
    }
    ?>
</table>