<!DOCTYPE html>
<html>
<head>
    <title>View Parents</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>View Parents</h2>
            <?php
            include 'db.php';

            $result = $conn->query("SELECT * FROM Parents");
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ParentID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["TelephoneNumber"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>