<div class="tab-pane" id="payinfo">
                             <div class="form-row">
                                <!-- Grid column -->
                                    <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">

                                            </div>
                                    </div>
                                    <!-- Grid column -->
                                    <!-- Grid column -->
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                     <div class="box-part text-center">

                                             <i class="fa fa-money fa-3x" aria-hidden="true"></i>

                                         <div class="title">
                                             <h4>Gross Pay</h4>
                                         </div>

                                         <div class="text">
                                          <?php foreach ($data['employees'] as $employee) : ?>
                                             <span><?php echo $employee->sum;  ?></span>
                                          <?php endforeach; ?>
                                         </div>

                                        </div>
                                 </div>
                                        <!-- Grid column -->

                            </div><hr><br>

                             <h2>Pay Log</h2>
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

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

                </form>

             </div><!--/tab-pane-->
                         <div class="tab-pane" id="job">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

                </form>

             </div><!--/tab-pane-->
                         <div class="tab-pane" id="leaves">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

                </form>

             </div><!--/tab-pane-->
                         <div class="tab-pane" id="reports">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

                </form>

             </div><!--/tab-pane-->
                         <div class="tab-pane" id="documents">

               <h2></h2>

               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

                </form>

             </div><!--/tab-pane-->
