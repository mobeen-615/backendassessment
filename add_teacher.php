<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <div class="container">
            <h2>Add Teacher</h2>
            <form action="add_teacher.php" method="GET">
                <label for="TeacherID">ID:</label>
                <input type="text" id="TeacherID" name="TeacherID" required>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="salary">Annual Salary:</label>
                <input type="number" id="salary" name="salary" required>

                <label for="background_check">Background Check:</label>
                <input type="text" id="background_check" name="background_check" required>

                <input type="submit" value="Add Teacher">
            </form>
            
            <?php
            include 'db.php';

            if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
                $name = $_GET['name'];
                $address = $_GET['address'];
                $phone = $_GET['phone'];
                $salary = $_GET['salary'];
                $background_check = $_GET['background_check'];

                $sql = "INSERT INTO Teachers (Name, Address, PhoneNumber, AnnualSalary, BackgroundCheck) VALUES ( '$name', '$address', '$phone', '$salary', '$background_check')";
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
