<?php require APPROOT . '/views/inc/admheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
          <form action="  ">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Unapproved leaves</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Reason</th>
                          <th>Duration</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['leaves'] as $leave) : ?>
                    <tr>
                      <th scope="row"><?php echo $leave->empID; ?></th>
                      <td><?php echo $leave->firstName; ?></td>
                      <td><?php echo $leave->lastName; ?></td>
                      <td><?php echo $leave->reason; ?></td>
                      <td><?php echo $leave->email; ?></td>
                      <td><input type="submit" class="fa fa-check btn btn-success btn-sm " value="Approve" id="sub"></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
                </form>
                <form action="  ">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Unapproved leaves</h4>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Reason</th>
                          <th>Duration</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['leaves'] as $leave) : ?>
                    <tr>
                      <th scope="row"><?php echo $leave->empID; ?></th>
                      <td><?php echo $leave->firstName; ?></td>
                      <td><?php echo $leave->lastName; ?></td>
                      <td><?php echo $leave->reason; ?></td>
                      <td><?php echo $leave->email; ?></td>
                      <td><input type="submit" class="fa fa-times btn btn-danger btn-sm " value="Save" id="sub"></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
                </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/admfooter.php'; ?>
