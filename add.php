<?php include 'db.php'; ?>
<form method="post" action="">
    Name: <input type="text" name="name"><br>
    Roll No: <input type="text" name="roll"><br>
    Class: <input type="text" name="class"><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];

    $sql = "INSERT INTO students (name, roll, class) VALUES ('$name', '$roll', '$class')";
    if (mysqli_query($conn, $sql)) {
        echo "Student added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>