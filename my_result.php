<?php
session_start();


$conn = mysqli_connect("localhost", "root", "", "student");

if(!isset($_SESSION['username']) || $_SESSION['usertype'] != 'student') {
    header("location:login.php"); 
    exit();
}

$user = $_SESSION['username'];

$query = "SELECT * FROM result WHERE name='$user'";
$result_data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css"> </head>
<body>

    <header class="header">
        <a href="student_home.php">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li><a href="my_courses.php">My Courses</a></li>
            <li><a href="my_result.php">My Result</a></li>
        </ul>
    </aside>

    <div class="con">
        <h1>My Academic Results</h1> 
        <br>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Course Name</th>
                    <th class="text-center">Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(mysqli_num_rows($result_data) > 0) {
                    while($info = mysqli_fetch_assoc($result_data)) { 
                ?>
                <tr>
                    <td class="text-center"><?php echo $info['subject']; ?></td>
                    <td class="text-center"><b><?php echo $info['grade']; ?></b></td>
                </tr>
                <?php 
                    } 
                } else {
                    echo "<tr><td colspan='2' class='text-center'>No results found for $user</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>