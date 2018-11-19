<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">

        <div class="grids widget-shadow">
<div class="container bootstrap snippet">
    <div class="row">
        <!--<div class="col-sm-10"><h1>User name</h1><br><h4>Job Title</h4></div>-->
            <!-- COMpany LOGO-->
        <!--<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" style="position: absolute;
              left: 0px; top: 0px; width: 120px; height: 120px;"
                 class="img-circle img-responsive" src="<?php// echo URLROOT ?>/images/complogo.png"></a></div>-->
    </div>
    <div class="row">
<?php   include('basicinfo.php'); ?>
        <div class="col-sm-8">

            <ul class="nav nav-tabs">
                            <br><br><br>
                <li class="active"><a data-toggle="tab" href="#home">Personal</a></li>
                <li><a data-toggle="tab" href="#payinfo">Pay Info</a></li>
                <li><a data-toggle="tab" href="#job">Job</a></li>
                                <li><a data-toggle="tab" href="#leaves">Leaves</a></li>
                                <li><a data-toggle="tab" href="#reports">Reports</a></li>
                                <li><a data-toggle="tab" href="#documents">Documents</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">

                                <!-- Extended material form grid -->
                                <form action="<?php echo URLROOT; ?>/admins/update/<?php echo $data['id']; ?>" method="post">

                                    <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Bio</h2>
                                    <hr>
                                    <!-- Grid row --><br>
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input disabled type="text" class="form-control" id="inputAddress4MD" value="<?php echo $data['empdetails']->empID; ?>">
                                                <label for="inputAddress4MD">Employee ID</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                    </div>
                                    <!-- Grid row -->

                                    <!-- Grid row --><br>
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input type="text" class="form-control" name="fname" id="inputFirstNameMD" value="<?php echo $data['empdetails']->firstName; ?>">
                                                <label for="inputFirstNameMD">First Name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                                <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input type="text" class="form-control" name="mname" id="inputMiddleNameMD" value="<?php echo $data['empdetails']->middleName; ?>">
                                                <label for="inputMiddleNameMD">Middle Name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                                <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                                <input type="text" class="form-control" name="lname" id="inputLastNameMD" value="<?php echo $data['empdetails']->lastName; ?>">
                                                <label for="inputLastNameMD">Last Name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                  </div><br>
                                  <!-- Grid row -->
                                    <!-- Grid row --><br>
                                    <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="phonen" id="inputPhoneMD" value="<?php echo $data['empdetails']->phone; ?>">
                                                        <label for="inputPhoneMD">Phone</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                            <!-- Grid column -->
                                            <div class="col-md-4">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                            <input type="text" class="form-control" name="birthdate" id="inputBirthDateMD" value="<?php echo $data['empdetails']->birthDate; ?>">
                                                            <label for="inputBirthDateMD">BirthDate</label>
                                                    </div>
                                            </div>
                                            <!-- Grid column -->
                                            <div class="col-md-2">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                        <!-- <label for="inputGenderDateMD">Gender</label> -->
                                                            <select disabled class="mdb-select colorful-select dropdown-info" name="sex" >
                                                              <option value="<?php echo $data['empdetails']->sex; ?>" selected disabled hidden ><?php echo $data['empdetails']->sex; ?></option>
                                                              <option value="M">M</option>
                                                              <option value="F">F</option>
                                                            </select>

                                                    </div>
                                            </div>
                                            <!-- Grid column -->
                                            <div class="col-md-2">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="age" id="inputEmailMD" value="<?php echo $data['empdetails']->age; ?>">
                                                        <label for="inputEmailMD">Age</label>
                                                </div>
                                        </div>

                                </div><br>
                                <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="email" id="inputEmailMD" value="<?php echo $data['empdetails']->email; ?>">
                                                        <label for="inputEmailMD">E-mail</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="nationality" id="inputNatMD" value="<?php echo $data['empdetails']->nationality; ?>">
                                                        <label for="inputNatMD">Nationality</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                    <!-- <label for="inputGenderDateMD">Gender</label> -->
                                                        <select class="mdb-select colorful-select dropdown-info" name="status">
                                                            <option value="<?php echo $data['empdetails']->status; ?>" selected disabled hidden ><?php echo $data['empdetails']->status; ?></option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Suspended</option>
                                                            <option value="3">Fired</option>
                                                            <option value="4">Applicant</option>

                                                        </select>

                                                </div>
                                        </div>
                                        <!-- Grid column -->

                            </div><br>
                                <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Address</h2>
                                <hr><br>
                                <div class="form-row"><!-- Grid row -->
                                <!-- Grid column -->
                                <div class="col-md-12">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                                <input type="text" class="form-control" name="address" id="inputAddressMD" value="<?php echo $data['empdetails']->address; ?>">
                                                <label for="inputAddressMD">Address</label>
                                        </div>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <!-- <div class="col-md-4"> -->
                                        <!-- Material input -->
                                        <!-- div class="md-form form-group">
                                                <input type="text" class="form-control" id="inputCityMD" placeholder="City">
                                                <label for="inputCityMD">City</label>
                                        </div> -->
                                <!-- </div> -->
                                <!-- Grid column -->
                            </div><br>
                            <!-- Grid row -->
                                        
                                    <input type="submit" class="btn btn-primary btn-md pull-right" value="Save" id="sub">
                                </form>


             </div><!--/tab-pane-->
                <?php include('remdetails.php'); ?>
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
 
