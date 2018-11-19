<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Reports</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Employee Name</th>
                          <th>Subject</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['reports'] as $report) : ?>
                    <tr>
                      <th scope="row"><?php echo $report->empID;?></th>
                      <td><?php echo $report->firstName; ?> &nbsp; <?php echo $report->lastName; ?></td>
                      <td><?php echo $report->reportTitle; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/reportinfo/<?php echo $report->reportID; ?>"><span class="btn btn-primary btn-sm"><span class="fa fa-space-shuttle"></span></span></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
