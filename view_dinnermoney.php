<!DOCTYPE html>
<html>
<head>
    <title>View Dinner Money</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>View Dinner Money</h2>
            <?php
            include 'db.php';

            $result = $conn->query("SELECT * FROM DinnerMoney");
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Pupil ID</th><th>Amount</th><th>Payment Date</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["PupilID"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["PaymentDate"] . "</td></tr>";
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