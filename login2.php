<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "tour";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection Failed:", mysqli_connect_error();
    exit;
}

$email = $_GET['email'];
$password = $_GET['password'];

$sql = "select * from register where Email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo '<script>alert("Login Success.!!");</script>';
    header('Location:register.html');
    exit;
    

} else {
    echo '<script>alert("Login Fail.!");</script>';
    header('Location:login.html');
}
?>
 <!-- //to prevent from mysqli injection  
        $mail = stripcslashes($mail);  
        $password = stripcslashes($password);  
        $mail = mysqli_real_escape_string($con, $mail);  
        $password = mysqli_real_escape_string($con, $password);   -->