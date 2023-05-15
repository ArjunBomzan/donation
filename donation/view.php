<?php
include("../misc/functions.php");
include ("../cms/includes/header.php");
include("../misc/db.php");
?>
<div class="nav-container>
<div class="row">
    <div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
<div class="container-fluid p-0 m-0">
        <a class="navbar-brand text-dark " href="<?php echo url('index.php'); ?>"><h3> Name of oragnization</h3></a>
        <form class="form-inline my-2 my-lg-0  px-5">
      
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#login" id="loginbtn">
<h3>Login</h3>
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
        <form class="sign" action="<?php echo url('cms/login-check.php');?>" method="POST">
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
         <!-- Modal body form -->
      </div>
    </div>
  </div>
</div>
    <!-- Login modal  ends-->
</nav>
</div>
</div>



<div class='row'>
<div class="col-md-4">


<!--selecting-->
<?php 
$id=$_GET['p_id'];
$sql="SELECT * FROM publish WHERE p_id='$id'";
$result=$db->query($sql);
$row=mysqli_fetch_assoc($result);
  $p_id=$row['p_id'];
  $fullname=$row['fullname'];
  $description=$row['description'];
  $title=$row['title'];

  $img=$row['img'];
  echo"  
  <div class='col-md-4 p-4'>
          <div class='card' style='width: 25rem; '>
          <h5 class='card-title'>Name: $fullname</h5>
            <img class='card-img-top' src='../images/student/$img' alt='Card image cap'>
            <div class='card-body'>
           
              
          </div>
      </div>
</div>";

?>  
</div>
<div class="col-md-6">
  <dv class="text-center">
    <?php
    echo"<h3 class='text-center '>$description </h3><br>
    <a href='../donation/donate.php' class='btn btn-primary px-4'>Donate Now</a>"?>
  </dv>
</div>
</div>


<?php
include("../cms/includes/footer.php");
?>

  



