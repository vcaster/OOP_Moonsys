<?php require APPROOT . '/views/inc/usrheader.php'; ?>
        <!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
<div class="box">
    <div class="container">
        <div class="row">
            <?php flash('post_message');  ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                        
                        <div class="title">
                            <h4>Recent Activities</h4>
                        </div>
                        
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                        <a href="#">View All</a>
                        
                     </div>
                </div>   
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                    
                        <div class="title">
                            <h4>On Leave</h4>
                        </div>
                        
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <a href="#">View All</a>
                        
                     </div>
                </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
                    <div class="box-part text-center">
                        
                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                        
                        <div class="title">
                            <h4>Reports</h4>
                        </div>
                        
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
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
<?php require APPROOT . '/views/inc/usrfooter.php'; ?>
