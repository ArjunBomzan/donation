<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action=<?php echo url('cms/dashboard/admit-check.php');?> method="POST" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="fname"/>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="lname" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="birthdayDate" name="dob" />
                    <label for="birthdayDate" class="form-label">Date of birth</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-2 pb-2">

                  <div class="form-outline">
                    <input type="text" id="Address" class="form-control form-control-lg" name="address"/>
                    <label class="form-label" for="Address">Address</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2pb-2">

                  <div class="form-outline">
                    <input type="text" id="gaurdain" class="form-control form-control-lg" 
                    placeholder="if any guardian" name="guardian" />
                    <label class="form-label" for="phoneNumber">Guardian</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-6">

                  <select class="select form-control-lg" name="category">
                    <option value="#" disabled>Choose option</option>
                    <option value="under5">under-5</option>
                    <option value="under12">under-12</option>
                    <option value="unser16">under-16</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>
                  </div>

                  <div class="col-6">
                  <div class="form-outline">
                    <input type="text" id="phoneNumber" class="form-control form-control-lg" name="phone" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
              
                        </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
              <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="admission" name="admitdate" />
                    <label for="admissiondate" class="form-label">Admission date</label>
                  </div>
                  </div>

                  <div class="col-6">
              <div class="form-outline datepicker w-100">
                    <input type="file" class="form-control form-control-lg" id="admission" name="file" />
                    <label for="admissiondate" class="form-label">Upload image</label>
                  </div>
                  </div>
                  </div>
<div class="row">
    <div class="col-12">
    <label class="form-label" for="phoneNumber">Reason of Parent's death</label>
        <textarea  class="form-control"name="reason" id="" cols="30" rows="5" name="reason"></textarea>
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