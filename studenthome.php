<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
elseif($_SESSION['usertype'] == 'admin') {
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

    <header class="header">
        <a href="studentshome.php">Student Dashboard</a>
<div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <aside>
        <ul>
          <li>
    <a href="my_courses.php">My Courses.</a>
 </li>
            <li>
                <a href="my_result.php">My Result</a>
            </li>
        </ul>
    </aside>

    <div class="content">
        <h1 style="text-align: center;">Welcome Student!</h1>
    </div>

</body>
</html>