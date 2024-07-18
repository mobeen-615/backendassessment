<!DOCTYPE html>
<html>
<head>
    <title>View Teachers</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>View Teachers</h2>
            <?php
            include 'db.php';

            $result = $conn->query("SELECT * FROM Teachers");
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Annual Salary</th><th>Background Check</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["TeacherID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["PhoneNumber"] . "</td><td>" . $row["AnnualSalary"] . "</td><td>" . $row["BackgroundCheck"] . "</td></tr>";
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