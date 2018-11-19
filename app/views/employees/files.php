<?php require APPROOT . '/views/inc/usrheader.php'; ?>
              <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Files</h4>
                    <a href="<?php echo URLROOT; ?>/employees/filesupload/<?php echo $_SESSION['user_id']; ?>"><span class="btn btn-primary btn-sm pull-right"><span class="fa fa-plus"></span> Upload</span></a>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Employee Name</th>
                          <th>Name</th>
                          <th>Filename</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['files'] as $file) : ?>
                    <tr>
                      <th scope="row"><?php echo $file->empID;?></th>
                      <td><?php echo $file->firstName; ?> &nbsp; <?php echo $file->lastName; ?></td>
                      <td><?php echo $file->name; ?></td>
                      <td><?php echo $file->filename; ?></td>
                      <td><a href="<?php echo URLROOT; ?>/employees/filesdownload/<?php echo $file->filesID; ?>"><span class="btn btn-primary btn-sm"><span class="fa fa-download"></span></span></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/usrfooter.php'; ?>
