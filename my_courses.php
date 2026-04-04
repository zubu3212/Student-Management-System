<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "student"; // Tomar database name 'student'

$data = mysqli_connect($host, $user, $password, $db);

if(!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
elseif($_SESSION['usertype'] == 'admin') {
    header("location:login.php");
    exit();
}

$sql = "SELECT * FROM course"; 
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Courses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

    <header class="header">
        <a href="studenthome.php">Student Dashboard</a>
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

    <div class="content">
        <h1 class="text-center">My Enrolled Courses</h1>
        <br><br>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Course Name</th>
                        <th class="text-center">Teacher</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php while($info = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="text-center"><?php echo $info['name']; ?></td>
                        <td class="text-center"><?php echo $info['teacher']; ?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>