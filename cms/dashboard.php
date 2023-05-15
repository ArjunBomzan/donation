<?php
    session_start();
    require "../misc/functions.php";
   // require "../misc/loggedin.php";
    require "dashboard/dheader.php";
    require "dashboard/nav.php";
    require "../misc/db.php";
?>

    <main class="row">
        <div class="col-12 bg-white my-3 py-3">
            <div class="row">
                <div class="col-4">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-8">
                    <h1>Welcome To Admin Panel</h1>
                </div>
            </div>  
        </div>
    </main>
    
      <!-- control pannel-->
        <div class="row">
  <div class="col-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" 
      href="dashboard.php?$view-report" role="tab" aria-controls="view" style="font-size:30px;">View Report</a>
      <a class="list-group-item list-group-item-action active bg-danger" id="list-profile-list" "
       href="dashboard.php?$admit" role="tab" aria-controls="admission"style="font-size:30px;">Admission</a>
      <a class="list-group-item list-group-item-action active bg-primary" id="list-home-list"
       href="dashboard.php?$view-student" role="tab" aria-controls="view" style="font-size:30px;">View Students</a>
       <a class="list-group-item list-group-item-action active bg-secondary " id="list-messages-list" 
      href="dashboard.php?$publish" role="tab" aria-controls="publish"style="font-size:30px;">Publish</a>
      <a class="list-group-item list-group-item-action active bg-success" id="list-settings-list" 
      href="#list-settings" role="tab" aria-controls="collection"style="font-size:30px;"z>Collection</a>
    </div>
  </div>
  <div class="col-md-9">
    <?php if(isset($_GET['$admit'])){
require("dashboard/admit.php");
        }?>
        <?php if(isset($_GET['$publish'])){
require("dashboard/publish.php");
        }?>
        <?php if(isset($_GET['$view-report'])){
require("dashboard/view-report.php");
        }?>
        <?php if(isset($_GET['$view-student'])){
require("dashboard/view-student.php");
        }?>
  </div>
</div>




  
<?php require "dashboard/dfooter.php"; ?>