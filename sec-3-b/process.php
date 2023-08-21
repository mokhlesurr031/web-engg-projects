<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
</head>
<body>
    <h1>Student Information Form</h1>
    <form action="process.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" required><br>
        <label for="roll_number">Roll Number: </label>
        <input type="text" name="roll_number" required><br>
        <label for="subject">Subject: </label>
        <input type="text" name="subject" required><br>
        <label for="marks">Marks: </label>
        <input type="number" name="marks" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
