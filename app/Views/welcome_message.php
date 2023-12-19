<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
</head>
<body>
    <h1>Registeration Form</h1>
    <form action="<?php echo site_url("Home/insert")?>" method="POST" >
        <label for="student_name">Student Name </label>
        <input type="text" name="Student_Name" placeholder="Enter Name Here..."><br><br>
        <label for="email">Student Email id: </label>
        <input type="email" name="Student_Email" id="email" placeholder="Enter Email here..."><br><br>
        <label for="password">Password </label>
        <input type="password" name="Student_Password" id="password" placeholder="Enter Password here..."><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>