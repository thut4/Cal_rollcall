<?php
require_once("connection.php");
$name = $email = $phone = $password = $pwd = '';
$name =$_POST['email'];
$email = $_POST['email'];
$phone = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM register WHERE name='$name' OR email='$email' OR phone='$phone' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
    {
      session_start();
      $_SESSION['logged_in'] = true;
      $_SESSION['name'] = $name;
      header("Location:index.php");
    }
    else
    {
		header("Location: login.php");
    }
?>