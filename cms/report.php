<?php

    //session_start();
    require "../misc/functions.php";
    require "../misc/db.php";
   
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $address= $_POST['address'];
    $phone = $_POST['phone'];
    $age= $_POST['age'];
    $gender=$_POST['gender'];
    $reason=$_POST['reason'];
    $dob=$_POST['dob'];
 if($fname=='' && $lname==''){
    header('Location: '.url('index.php'));
 }
else{
    $sql="INSERT INTO `report`( `fname`, `lname`, `dob`, `age`, `gender`, `address`, `phone`, `reason`) 
    VALUES ('$fname','$lname','$dob','$age','$gender','$address','$phone','$reason')";
    $result=$db->query($sql);
    if(isset($result)){
//session
header('Location: '.url('index.php'));
    };
};
  
  
    