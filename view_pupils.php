<!DOCTYPE html>
<html>
<head>
    <title>View Pupils</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>View Pupils</h2>
            <?php
            include 'db.php';

            $result = $conn->query("SELECT * FROM Pupils");
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Medical Info</th><th>Class ID</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["PupilID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["MedicalInformation"] . "</td><td>" . $row["ClassID"] . "</td></tr>";
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