<!DOCTYPE html>
<html>
<head>
    <title>Add Parent</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>Add Parent</h2>
            <form action="add_parent.php" method="GET">
                <label for="ParentID">ID:</label>
                <input type="text" id="ParentID" name="ParentID" required>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>

                <input type="submit" value="Add Parent">
            </form>
            
            <?php
            include 'db.php';

            if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
                $name = $_GET['name'];
                $address = $_GET['address'];
                $email = $_GET['email'];
                $phone = $_GET['phone'];

                $sql = "INSERT INTO Parents (Name, Address, Email, TelephoneNumber) VALUES ('$name', '$address', '$email', '$phone')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p>New record created successfully</p>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>