<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="tour";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $uname=$_POST['uname'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    $sql="Insert into register(Name,Email,password) values ('$uname','$mail','$password')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    // echo "We will contact you soon";
    mysqli_close($conn);
    header('Location:login.html');
    exit;
 
?>
