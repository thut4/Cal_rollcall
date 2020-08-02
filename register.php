<?php
require_once("connection.php");
    $year = $major = $rollno = $name = $email = $dob = $gender = $address = $phone = $password = $pwd = '';
    $year = $_POST['year'];
    $major = $_POST['major'];
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);
    $sql = "INSERT INTO register (year,major,rollno,name,email,dob,gender,address,phone,password) VALUES ('$year','$major','$rollno','$name','$email','$dob','$gender','$address','$phone','$password')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
	    header("Location: login.html");
    }
    else
    {
	    echo "Error :".$sql;
    }
?> 