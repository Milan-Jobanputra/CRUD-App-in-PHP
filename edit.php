<?php
// edit.php

$conn = mysqli_connect("localhost", "username", "password", "crud_example");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    header("Location: index.php");
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <input type="submit" value="Save">
    </form>
    <br>
    <a href="index.php">Back to User List</a>
</body>
</html>
