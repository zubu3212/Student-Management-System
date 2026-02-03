<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("location:login.php");
}
elseif($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "student";

$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $check = "SELECT * FROM user WHERE username='$username'";
    $check_user = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_user);

    if($row_count == 1) {
        echo "<script type='text/javascript'>alert('Username Already Exist. Try Another One');</script>";
    } else {
        $sql = "INSERT INTO user (username,email,phone,usertype,password) VALUES ('$username','$user_email','$user_phone','$usertype','$user_password')";
        $result = mysqli_query($data, $sql);

        if($result) {
            echo "<script type='text/javascript'>alert('Data Upload Success');</script>";
        } else {
            echo "Upload Failed";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Student</title>
    <link rel="stylesheet" type="text/css" href="add_student.css">
    <?php include 'admin_css.php'; ?>
</head>
<body>

    <?php include 'admin_sidebar.php'; ?>

    <div class="con">
        <center>
            <h1>Add Student</h1>
            <br>
            <div class="form_deg">
                <form action="#" method="POST">
                    <div>
                        <label class="label_deg">Username</label>
                        <input type="text" name="name" class="input_deg" required>
                    </div>
                    <div>
                        <label class="label_deg">Email</label>
                        <input type="email" name="email" class="input_deg" required>
                    </div>
                    <div>
                        <label class="label_deg">Phone</label>
                        <input type="number" name="phone" class="input_deg" required>
                    </div>
                    <div>
                        <label class="label_deg">Password</label>
                        <input type="password" name="password" class="input_deg" required>
                    </div>
                    <br>
                    <input type="submit" name="add_student" class="btn_deg" value="Add Student">
                </form>
            </div>
        </center>
    </div>

</body>
</html>