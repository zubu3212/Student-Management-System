<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "student";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection failed!");
}

if (isset($_POST['apply'])) {
    $data_name = $_POST['name'];
    $data_email = $_POST['email'];
    $data_phone = $_POST['phone'];
    
    // Spelling check: 'message' hobe (HTML name attribute er sathe mil rekhe)
    $data_message = $_POST['message']; 

    // Query teo column name 'message' hobe
    $sql = "INSERT INTO admission(name, email, phone, message) VALUES ('$data_name', '$data_email', '$data_phone', '$data_message')";

    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "Apply successfully";
    } else {
        // Jodi database-e column missing thake tobe ekhon exact error dekhabe
        echo "Apply failed: " . mysqli_error($data);
    }
}
?>