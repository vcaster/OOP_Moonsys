<?php require APPROOT . '/views/inc/usrheader.php'; ?>
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
        <div class="col-sm-3"><!--left col-->


      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
                <input type="file">
      </div><hr>

                    <!--<div class="panel panel-default">
                        <div class="panel-heading"<h1>USER NAME</h1>&nbsp;<i class="fa fa-user fa-1x"></i></div>
                        <div class="panel-body">JOB TITLE</div>
                    </div></hr><br>-->
                    <div class="text-center">
                <h4><i class="fa fa-user fa-1x"></i>&nbsp;<?php echo $data['empdetails']->lastName." ".$data['empdetails']->lastName; ?></h4>
                        <h5><i class="fa fa-ufa fa-briefcase fa-1x"></i>&nbsp;<?php echo $data['empdetails']->positionName; ?></h5>
                        <span class="label label-primary"><?php echo $data['empdetails']->status; ?></span>
              </div><hr>

                    <div class="text-center">
                <p><i class="fa fa-ufa fa-building fa-1x"></i>&nbsp;<?php echo $data['empdetails']->address; ?></p>
                        <p><i class="fa fa-mobile fa-1x"></i>&nbsp;<?php echo $data['empdetails']->phone; ?></p>
              </div><hr>

                    <div class="text-center">
                <p><strong>Hired</strong></p>
                        <p><?php echo $data['empdetails']->hireDate; ?></p>
              </div><hr>

                    <div class="text-center">
                <p><strong>Manager</strong></p>
                        <p>Manager Name</p>
                        <p>Job Title</p>
              </div><hr>

          <!-- <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>

                    <div class="list-group">
    <a href="#" class="list-group-item active">
        <span class="glyphicon glyphicon-camera"></span> Pictures
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-file"></span> Documents
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-music"></span> Music
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-film"></span> Videos
    </a>
</div>-->


          <ul class="list-group">
            <li class="list-group-item text-muted"><strong>Recent Activity</strong> <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 1</span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 2</span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 3</span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left">Activity 4</span> 78</li>
          </ul>

          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>

        </div><!--/col-3-->
        <div class="col-sm-8">

            <ul class="nav nav-tabs">
                            <br><br><br>
                <li class="active"><a data-toggle="tab" href="#home">File download</a></li>
              </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">

                                <!-- Extended material form grid -->
                                <form action="<?php echo URLROOT; ?>/employees/filesdownload/<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">

                                    <i class="fa fa-address-card fa-1x"></i>&nbsp;<h2>File download</h2>
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
                                        <div class="col-md-12">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="name" id="inputPhoneMD" value="<?php echo $data['empdetails']->name; ?>">
                                                        <label for="inputPhoneMD">Name</label>
                                                </div>
                                        </div>
                                        
                                             
                                </div><br>
                                <div class="form-row">
                                    <div class="col-md-8">
                                                <!-- Material input -->
                                                <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="filename" id="inputEmailMD" value="<?php echo $data['empdetails']->filename; ?>">
                                                        <label for="inputEmailMD">Filename</label>
                                                </div>
                                        </div>
                            </div><br>
                                <br>
                            <!-- Grid row -->
                                        
                                    <input type="submit" class="btn btn-primary btn-md pull-right" value="Download" id="sub">
                                </form>


             </div><!--/tab-pane-->
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/usrfooter.php'; ?>
 
