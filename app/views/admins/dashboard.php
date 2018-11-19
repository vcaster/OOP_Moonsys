<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
<div class="box">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-volume-up fa-3x" aria-hidden="true"></i>
                        
                        <div class="title">
                            <h4>Annoucements</h4>
                        </div>
                        
                        <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                          <th>Posted By</th>
                          <th>Annoucement</th>
                          <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['announcements'] as $announcement) : ?>
                    <tr>
                      <th scope="row"><?php echo $announcement->firstName;?></th>
                      <td><?php echo $announcement->announcement; ?></td>
                      <td><?php echo $announcement->deptName; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                        
                        <a href="<?php echo URLROOT ?>/admins/announcements">View All</a>
                        
                     </div>
                </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-hotel fa-3x" aria-hidden="true"></i>
                    
                        <div class="title">
                            <h4>On Leave</h4>
                        </div>
                        
                        <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Employe Name</th>
                          <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['leaves'] as $leave) : ?>
                    <tr>
                      <th scope="row"><?php echo $leave->empID;?></th>
                      <td><?php echo $leave->firstName; ?></td>
                      <td><?php echo $leave->deptName; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                        
                        <a href="<?php echo URLROOT ?>/admins/onleave">View All</a>
                        
                     </div>
                </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-file-code-o fa-3x" aria-hidden="true"></i>
                        
                        <div class="title">
                            <h4>Reports</h4>
                        </div>
                        
                         <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Subject</th>
                          <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['reports'] as $report) : ?>
                    <tr><a href="<?php echo URLROOT; ?>/admins/reportinfo/<?php echo $report->reportID; ?>">
                      <th scope="row"><?php echo $report->empID;?></th>
                      <td><?php echo $report->reportTitle; ?></td></a>
                      <td><?php echo $report->deptName; ?></td></a>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                        
                        <a href="<?php echo URLROOT ?>/admins/reports">View All</a>
                        
                     </div>
                </div>  
            </div>
        </div>
    </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
