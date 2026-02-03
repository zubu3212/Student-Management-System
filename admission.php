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


$sql = "SELECT * FROM admission";
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>

    <?php include 'admin_css.php'; ?>
    
    <style type="text/css">
        
        .table_deg {
            border-collapse: collapse;
            width: 90%;
            margin-left: 20px;
        }

        .th_deg {
            padding: 15px;
            font-size: 16px;
            background-color: #424a5b;
            color: white;
            border: 1px solid white;
        }

        .td_deg {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        
     
        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php include 'admin_sidebar.php'; ?>

<div class="con">
    
    <center>
        <h1>Applied For Admission</h1>
        <br>

        <table class="table_deg">
            <tr>
                <th class="th_deg">Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Message</th>
            </tr>

            <?php 
           
            while ($info = $result->fetch_assoc()) { 
            ?>
            
            <tr>
                <td class="td_deg"><?php echo "{$info['name']}"; ?></td>
                <td class="td_deg"><?php echo "{$info['email']}"; ?></td>
                <td class="td_deg"><?php echo "{$info['phone']}"; ?></td>
                <td class="td_deg"><?php echo "{$info['message']}"; ?></td>
            </tr>

            <?php 
            } 
            ?>

        </table>
    </center>
</div>

</body>
</html>