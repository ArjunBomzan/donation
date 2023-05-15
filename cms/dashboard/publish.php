
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Publish For donation</h3>
            <p class="text-center">Please Admit the student before you publish for donation</p>
            <form action=<?php echo url('cms/dashboard/publish-check.php');?> method="POST" enctype="multipart/form-data">
            <div class="row">
            
              <div class="col-md-6 mb-2">

                  <div class="form-outline">
                  <label class="form-label" for="firstName">First Name</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" name="fname"/>

                  </div>  
</div>   
                  <div class="col-6 mb-2">

                  <div class="form-outline">
                  <label class="form-label" for="firstName">Last Name</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" name="lname"/>
                  
                  </div>               
          </div>
</div>

           
<div class="row">
    <div class="col-12">
    <label class="form-label" for="title">Title</label>
        <textarea  class="form-control"  id="" cols="30" rows="2" name="title"></textarea>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    <label class="form-label" for="phoneNumber">Description </label>
        <textarea  class="form-control"name="reason" id="" cols="30" rows="4" name="reason"></textarea>
    </div>
</div>
</div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                <input class="btn btn-primary btn-lg" type="reset" value="Reset" />


              </div>
              
               
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
