<?php
require("../../misc/functions.php");
require("../../misc/db.php");
    $errors= array();
    $file_name1 =$_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];                           
    $file_name = rand(1000,100)."=".$_FILES['file']['name'];
    $destination= "C:/wamp64/www/Aproject/images/student/";
  
    $extensions= array("jpeg","jpg","png" ,"image/jpeg",);
    

    echo $file_type;
    if(in_array($file_type,$extensions)=== true){

        if($file_size<5*1024*1024){
           
            move_uploaded_file($file_tmp,$destination. $file_name);
            

        }else{
            $errors[]='File size must be excately 5 MB';
        }
    }else{
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$address=$_POST['address'];

$gender=$_POST['gender'];
$guardian=$_POST['guardian'];
$phone=$_POST['phone'];
$admitdate=$_POST['admitdate'];
$reason=$_POST['reason'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$sql="INSERT INTO `student`( `fname`, `lname`, `dob`, `address`, `guardian`, `phone`, `reason`, `admitdate`, `img`, 
`category`, `gender`) VALUES ('$fname','$lname','$dob','$address','$guardian','$pnone','$reason','$admitdate','$file_name','$category','$gender')";
$result=$db->query($sql);
if(isset($result)){
    header('Location: '.url('cms/dashboard.php'));
};
