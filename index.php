<?php
include("misc/functions.php");
include ("cms/includes/header.php");
include("misc/db.php");
session_start();
?>
<div class="nav-container>
<div class="row">
    <div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
<div class="container-fluid p-0 m-0">
        <a class="navbar-brand text-dark " href="<?php echo url('index.php'); ?>"><h3> Orpahange Connecting </h3></a>
        <form class="form-inline my-2 my-lg-0  px-5">
      
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#login" id="loginbtn">
<h5>Login</h>
</button>
    </form >
    </div>
    <!-- Login modal  starts-->
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login </h5>
        <button type="button" class="close" id="close1"data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Modal body form -->
        <form class="sign" action="<?php echo url('cms/login-check.php');?>" method="POST" onsubmit="return validation()">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Email address</label>
    <input type="text" class="form-control" id="username" placeholder="username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" name="remeberme" class="form-check-input" id="dropdownCheck2">
    <label class="form-check-label" for="dropdownCheck2">
      Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


<?php if(isset($_GET['wrong'])){
  echo"<script>alert('Incorrect email or password')</script>";
}?>
         <!-- Modal body form -->
      </div>
    </div>
  </div>
</div>
    <!-- Login modal  ends-->
</nav>
</div>
</div>

<!--Body Starts here-->
  <!--Main Navigation-->
  <header>
  

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong ">
      <div class="text">
        <div class="container d-flex align-items-center justify-content-center text-center h-100 px-30">
          <div class="text-white">
            <h1 class="mb-3">Welcome To OCMS </h1>
            <h5 class="mb-4">Let us embrace the child today to make the future secure!  </h5>
           <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#report" id="reportbtn">
<h1>Report</h1>
</button>
              <h5 class="mb-4 message1">If you spot any orphan around your area report here</h5>
              <h5 class="mb-4 message1"><a href="terms.php">Terms and Condition</a></h5>
            
    
          </div>
        </div>
      </div>
    </div>

    <!-- Background image -->
  </header>



  <!-- Report Modal -->
    
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Report </h5>
        <button type="button" id="exit1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <!--Repoert Form -->
    <!-- Modal body form -->
    <form  action="<?php echo url('cms/report.php');?>" method="POST">
      <div class="row">
        <div class="col-6">
      <div class="form-group">
    <label for="username">First Name</label>
    <input type="text" class="form-control" id="fname" placeholder="First Name"name="fname">
  </div>
      </div>
      <div class="col-6">
      <div class="form-group">
    <label for="lname"> Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Second Name" >
  </div>
  </div>
</div>
<div class="row">
        <div class="col-6">
      <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address"name="address">
  </div>
      </div>
      <div class="col-6">
      <div class="form-group">
    <label for="phone"> Phone</label>
    <input type="text" class="form-control" id="Phone" name="phone" placeholder="phone" >
  </div>
  </div>
</div>
<div class="row">
        <div class="col-6">
      <div class="form-group">
    <label for="number">Age</label>
    <input type="text" class="form-control" id="age" placeholder="age"name="age">
  </div>
      </div>
      <div class="col-6">
      <div class="form-group">
    <label for="reason">Reason Of Parent's</label>
    <textarea class="form-control" id="reason" name="reason" placeholder="reason" ></textarea>
  </div>
  </div>
</div>
<div class="row">
        <div class="col-6">
      <div class="form-group">
    <label for="date">Date Of Birth</label>
    <input type="date" class="form-control" id="dob" placeholder="date of birth"name="dob">
  </div>
  </div>
  <div class="col-6">
      <div class="form-group">
    <label for="gender"" class="form-control">Gender:</label>
    <input type="radio" value="male" name="gender" ><label for="gender">Male</label>
    <input type="radio"  value="female" name="gender" ><label for="gender">Female</label>
  </div>
  </div>
</div>
  


  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="exit"data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
    <!-- Report modal -->
  <p class="message"><b>Your small help can be a blessing to these kids</b></p>
  <!-- content -->

<div class='row'>
<!--selecting-->
<?php 
$sql="SELECT * FROM publish order by rand()";
$result=$db->query($sql);
while($row=mysqli_fetch_assoc($result)){
  $p_id=$row['p_id'];
  $fullname=$row['fullname']  ;
  $description=$row['description'];
  $title=$row['title'];
  $img=$row['img'];
  echo"  
  <div class='col-md-4 p-4'>
          <div class='card' style='width: 25srem; '>
            <img class='card-img-top' src='images/student/$img' alt='Card image cap'>
            <div class='card-body'>
              <h5 class='card-title'>Name: $fullname</h5>
              <p class='card-text'>$title</p>
              <a href='donation/donate.php' class='btn btn-primary'>Donate</a>
              <a href='donation/view.php?p_id=$p_id' class='btn btn-primary'>View Details</a>
          </div>
      </div>
</div>";
};
?>  
</div>

<?php
include("cms/includes/footer.php");
?>

  



