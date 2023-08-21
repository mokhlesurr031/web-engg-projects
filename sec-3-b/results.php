<!DOCTYPE html>
<html>
<head>
    <title>Student Results</title>
</head>
<body>
    <h1>Student Results</h1>
    <?php
    $conn = new mysqli("localhost", "admin", "secret", "student_info");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM students";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Roll Number</th><th>Subject</th><th>Marks</th><th>Grade</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $grade = ($row['marks'] >= 80) ? 'A' : ($row['marks'] >= 60 ? 'B' : ($row['marks'] >= 40 ? 'C' : 'D'));
            echo "<tr><td>".$row['name']."</td><td>".$row['roll_number']."</td><td>".$row['subject']."</td><td>".$row['marks']."</td><td>".$grade."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }

    $conn->close();
    ?>
</body>
</html>
