<?php
require("../../misc/functions.php");
require("../../misc/db.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fullname=$fname." ".$lname;


$description=$_POST['reason'];
$title=$_POST['title'];
$sql="SELECT * FROM student WHERE fname='$fname' AND lname='$lname'";
$result=$db->query($sql); 
$row=mysqli_fetch_assoc($result);
 
    $img=$row['img'];
    $age=$row['age'];
$gender=$row['gender'];
$address=$row['address'];
$category=$row['category'];
    

$store="INSERT INTO `publish`( `fullname`, `description`, `gender`, `category`, `img`,`title`) 
VALUES ('$fullname','$description','$gender','$category','$img','$title')";
$result1=$db->query($store);
if(isset($result1)){

//session here
header('Location: '.url('cms/dashboard.php'));
};



