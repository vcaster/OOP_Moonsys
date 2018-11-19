<?php require APPROOT . '/views/inc/usrheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
            <div class="tables">
                <!-- <h2 class="title1">Tables</h2> -->
                <br><br>
                <div class="panel-body widget-shadow">
                    <h4>Pay</h4>
                    <?php foreach ($data['employees'] as $employee) : ?>
                    <h5>Current Salary: <?php echo $employee->salaryAmt; ?> </h5>
                    <?php endforeach; ?>
                    <?php flash('post_message');  ?>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>reason</th>
                          <th>Amount Paid</th>
                          <th>Date Paid</th>
                          <th>Pay ID</th>                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['employees'] as $employee) : ?>
                    <tr>
                      <th scope="row"><?php echo $employee->empID; ?></th>
                      <td><?php echo $employee->reason; ?></td>
                      <td><?php echo $employee->amountPaid; ?></td>
                      <td><?php echo $employee->datePaid; ?></td>
                      <td><?php echo $employee->payLogID; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/usrfooter.php'; ?>
