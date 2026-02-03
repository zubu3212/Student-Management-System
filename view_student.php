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

$sql = "SELECT * FROM user WHERE usertype='student'"; 
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Student List</title>
    <link rel="stylesheet" type="text/css" href="view_student.css">
    <?php include 'admin_css.php'; ?>
</head>
<body>

    <?php include 'admin_sidebar.php'; ?>

    <div class="con">
        <center>
            <h1>View Student List</h1>
            <br>
            
            <table class="table_deg">
                <tr>
                    <th class="th_deg">Username</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Password</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Update</th>
                </tr>

                <?php
                while($info = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td class="td_deg"><?php echo "{$info['username']}"; ?></td>
                    <td class="td_deg"><?php echo "{$info['email']}"; ?></td>
                    <td class="td_deg"><?php echo "{$info['phone']}"; ?></td>
                    <td class="td_deg"><?php echo "{$info['password']}"; ?></td>
                    
                    <td class="td_deg">
                        <a onClick="javascript:return confirm('Are you sure?');" 
                           class='btn btn-danger' 
                           href='delete.php?student_id=<?php echo $info['id']; ?>'>
                           Delete
                        </a>
                    </td>

                    <td class="td_deg">
                        <a class='btn btn-primary' 
                           href='update_student.php?student_id=<?php echo $info['id']; ?>'>
                           Update
                        </a>
                    </td>
                </tr>

                <?php
                }
                ?>
            </table>
        </center>
    </div>

</body>
</html>