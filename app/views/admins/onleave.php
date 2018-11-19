<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>On Leave</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Employee Name</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['onleaves'] as $onleave) : ?>
                    <tr>
                      <th scope="row"><?php echo $onleave->empID;?></th>
                      <td><?php echo $onleave->firstName; ?> &nbsp; <?php echo $onleave->lastName; ?></td>
                      <td><?php echo $onleave->startDate; ?></td>
                      <td><?php echo $onleave->endDate; ?></td>
                      <td><?php echo $onleave->deptName; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/leaveinfo/<?php echo $onleave->leaveID; ?>"><span class="btn btn-primary btn-sm"><span class="fa fa-space-shuttle"></span></span></a>
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
