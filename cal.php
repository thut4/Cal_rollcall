<?php
require_once("connection.php");
require_once("link.php");
$percent=$result=$day=$day_result=$absent=$absent_result='';
//$time = date('Y-m-d H:i:s');
$percent=$_POST['percent'];
$day=$_POST['day'];
$result=$_POST['result'];
$day_result=$_POST['day_result'];
$absent=$_POST['absent'];
$absent_result=$_POST['absent_result'];
$sql="INSERT INTO calculate(percent,day,percent_result,day_result,absent,absent_result,time) VALUES('$percent','$day','$result','$day_result','$absent','$absent_result',now())";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo "Record inserted successfully";
    header("Location: index.php");
}
else
    {
	    echo "Error :".$sql;
    }
?>