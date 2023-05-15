<?php
    session_start();
    require "../misc/functions.php";
    require"includes/header.php";

    
?>

    <main class="row">
        <div class="col-12 bg-white my-3 py-3">
            <div class="row">
                <div class="col">
                    <h1>Edit Profile</h1>
                </div>
            </div>
        </div>
    </main>
    <div class ="row">
        <div class ="col-5 mx-auto">
            <form action="editprofile-check.php" method="POST">
                <div class="mb-3">
                    <label for ="name" class="form-label"> Name </label>
                    <input type ="text" name="name" id="name"
                    class="form-control" value="<?php echo user ()['username']; ?>" required>
                    <label for ="name" class="form-label"> New Name </label>
                    <input type ="text" name="newname" id="name" class="form-control">
                    <button type="submit" class="btn btn-success" id="loginbtn">
<h3>Submit</h3>
</button>
                </div>


        
