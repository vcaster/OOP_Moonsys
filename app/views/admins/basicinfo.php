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
                        <p><?php echo $data['empdetails']->mgrName; ?></p>
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

          <!-- <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div> -->

        </div><!--/col-3-->
