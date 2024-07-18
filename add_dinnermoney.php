<!DOCTYPE html>
<html>
<head>
    <title>Add Dinner Money</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>Add Dinner Money</h2>
            <form action="add_dinnermoney.php" method="GET">
                <label for="PupilID">Pupil ID:</label>
                <input type="text" id="PupilID" name="PupilID" required>

                <label for="Amount">Amount:</label>
                <input type="number" id="Amount" name="Amount" required>

                <label for="PaymentDate">Payment Date:</label>
                <input type="date" id="PaymentDate" name="PaymentDate" required>

                <input type="submit" value="Add Dinner Money">
            </form>
            
            <?php
            include 'db.php';

            if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
                $pupilID = $_GET['PupilID'];
                $amount = $_GET['Amount'];
                $paymentDate = $_GET['PaymentDate'];

                $sql = "INSERT INTO DinnerMoney (PupilID, Amount, PaymentDate) VALUES ('$pupilID', '$amount', '$datepaid')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p>New record created successfully</p>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>