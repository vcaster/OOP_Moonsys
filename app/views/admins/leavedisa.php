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
                <li class="active"><a data-toggle="tab" href="#home">Leave Info</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">

                                <!-- Extended material form grid -->
                                <form action="<?php echo URLROOT; ?>/admins/leavedisa/<?php echo $data['id']; ?>" method="post">

                                    <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>Leave Info</h2>
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
                                                        <input type="text" class="form-control" name="reason" id="inputPhoneMD" value="<?php echo $data['empdetails']->reason; ?>">
                                                        <label for="inputPhoneMD">Reason</label>
                                                </div>
                                        </div>
                                        <!-- Grid column -->
                                            <!-- Grid column -->
                                            <div class="col-md-4">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                            <input type="text" class="form-control" name="startdate" id="inputBirthDateMD" value="<?php echo $data['empdetails']->startDate; ?>">
                                                            <label for="inputBirthDateMD">Start Date</label>
                                                    </div>
                                            </div>
                                            <!-- Grid column -->
                                             <!-- Grid column -->
                                            <div class="col-md-4">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                            <input type="text" class="form-control" name="enddate" id="inputBirthDateMD" value="<?php echo $data['empdetails']->endDate; ?>">
                                                            <label for="inputBirthDateMD">End Date</label>
                                                    </div>
                                            </div>
                                            <!-- Grid column -->
                                            
                                </div><br>
                                <div class="form-row">
                                    <div class="col-md-2">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="tdays" id="inputEmailMD" value="<?php echo $data['empdetails']->totalDays; ?>">
                                                        <label for="inputEmailMD">Number of days</label>
                                                </div>
                                        </div>
                                 <!-- Grid column -->
                                            <div class="col-md-8">
                                                    <!-- Material input -->
                                                    <div class="md-form form-group">
                                                            <textarea type="text" class="form-control" name="startdate" id="inputBirthDateMD" value=""><?php echo $data['empdetails']->notes; ?></textarea> 
                                                            <label for="inputBirthDateMD">Notes</label>
                                                    </div>
                                            </div>
                                            <!-- Grid column -->
                            </div><br>
                                <br>
                            <!-- Grid row -->
                                        
                                    <input type="submit" class="btn btn-danger btn-md pull-right" value="Disapprove" id="sub">
                                </form>


             </div><!--/tab-pane-->
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
 
