<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// header("Location: http://localhost/BDMS/home.php");
// header("Location: http://localhost//Blood-bank-management-system-main/home.php");
header("Location: http://localhost//Blood-bank-management-system-main/success.php");
mysqli_close($conn);
 ?>
