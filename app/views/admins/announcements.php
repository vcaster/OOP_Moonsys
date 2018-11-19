<?php require APPROOT . '/views/inc/admheader.php'; ?>
              <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Announcements</h4>
                    <a href="<?php echo URLROOT; ?>/admins/announceupload/<?php echo $_SESSION['user_id']; ?>"><span class="btn btn-primary btn-sm pull-right"><span class="fa fa-plus"></span> Upload</span></a>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Department Name</th>
                          <th>Announcement</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['announcements'] as $announcement) : ?>
                    <tr>
                      <th scope="row"><?php echo $announcement->empID;?></th>
                      <td><?php echo $announcement->firstName; ?> &nbsp; <?php echo $announcement->lastName; ?></td>
                      <td><?php echo $announcement->announcement; ?></td>
                      <td><?php echo $announcement->date; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/admins/announcedelete/<?php echo $announcement->ID; ?>"><span class="btn btn-danger btn-sm"><span class="fa fa-times"></span></span></a>
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
