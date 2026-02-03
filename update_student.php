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

$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    $query = "UPDATE user SET username='$name', email='$email', phone='$phone', password='$pass' WHERE id='$id'";
    $result2 = mysqli_query($data, $query);

    if($result2) {
        header("location:view_student.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Student</title>
    <link rel="stylesheet" type="text/css" href="update_student.css">
    <?php include 'admin_css.php'; ?>
</head>
<body>

    <?php include 'admin_sidebar.php'; ?>

    <div class="con">
        <center>
            <h1>Update Student</h1>
            <br>
            <div class="form_deg">
                <form action="#" method="POST">
                    <div>
                        <label class="label_deg">Username</label>
                        <input type="text" name="name" class="input_deg" value="<?php echo "{$info['username']}"; ?>">
                    </div>
                    <div>
                        <label class="label_deg">Email</label>
                        <input type="email" name="email" class="input_deg" value="<?php echo "{$info['email']}"; ?>">
                    </div>
                    <div>
                        <label class="label_deg">Phone</label>
                        <input type="text" name="phone" class="input_deg" value="<?php echo "{$info['phone']}"; ?>">
                    </div>
                    <div>
                        <label class="label_deg">Password</label>
                        <input type="text" name="password" class="input_deg" value="<?php echo "{$info['password']}"; ?>">
                    </div>
                    <br>
                    <input type="submit" name="update" class="btn btn-success" value="Update">
                </form>
            </div>
        </center>
    </div>

</body>
</html>