<!DOCTYPE html>
<html>
<head>
    <title>Add Pupil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>Add Pupil</h2>
            <form action="add_pupil.php" method="GET">
                <label for="PupilID">ID:</label>
                <input type="text" id="PupilID" name="PupilID" required>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="medical_info">Medical Info:</label>
                <input type="text" id="medical_info" name="medical_info" required>

                <label for="class_id">Class ID:</label>
                <input type="text" id="class_id" name="class_id" required>

                <input type="submit" value="Add Pupil">
            </form>
            
            <?php
            include 'db.php';

            if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
                $name = $_GET['name'];
                $address = $_GET['address'];
                $medical_info = $_GET['medical_info'];
                $class_id = $_GET['class_id'];

                $sql = "INSERT INTO Pupils (Name, Address, MedicalInformation, ClassID) VALUES ('$name', '$address', '$medical_info', '$class_id')";
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