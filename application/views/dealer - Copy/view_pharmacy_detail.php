<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">Pharmacy Details</h4>
                  </div>
                  <!-- /.page title -->
                  <!-- .breadcrumb -->
                  <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Starter Page</li>
                     </ol>
                  </div> -->
                  <!-- /.breadcrumb -->
               </div>
               <!-- .row -->            
<div class="row">
<div class="col-md-4 col-xs-12">
    <div class="white-box">
        <div class="user-bg"> <img width="100%" alt="user" src="<?php echo $pharmacy_detail->photo; ?>"> </div>
        <div class="user-btm-box">
            <!-- .row -->
            <div class="row text-center m-t-10">
                <div class="col-md-6 b-r"><strong>Name</strong>
                    <p><?php echo $pharmacy_detail->username; ?></p>
                </div>
                <div class="col-md-6"><strong>Email</strong>
                    <p><?php echo $pharmacy_detail->email; ?></p>
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- .row -->
         
        </div>
    </div>
</div>
<div class="col-md-8 col-xs-12">
<div class="white-box">
        <!-- .tabs -->
  <div class="table-responsive">
      <table class="table">
    <tbody>
        
        <tr>
          <th>Qualification</th>
            <td><?php echo $pharmacy_detail->qualification; ?></td>
        </tr>
        <tr>
          <th>Mobile No.</th>
            <td>91+<?php echo $pharmacy_detail->mobile; ?></td>
        </tr>
        <tr>
          <th>Address</th>
           <td><?php echo @$pharmacy_detail->address; ?></td>
        </tr>
        <tr>
          <th>Landmark</th>
           <td><?php echo @$pharmacy_detail->landmark; ?></td>
        </tr>
      <tr>
          <th>State</th>
            <td><?php echo @$state_option[$pharmacy_detail->id]; ?></td>
        </tr>
        <tr>
          <th>City</th>
            <td><?php echo @$cities_option[$pharmacy_detail->id]; ?></td>
            
        </tr>
        <tr>
          <th>Pin Code</th>
            <td><?php echo $pharmacy_detail->pin_code; ?></td>
            
        </tr>
        <!-- <tr>
          <th>Serivices</th>
            <td><?php echo $service_option[$pharmacy_detail->id]; ?></td>           
        </tr> -->
    </tbody>
</table>
    </div>
</div>
</div>
 </div>
              
               <div class="right-sidebar">
                  <div class="slimscrollright">
                     <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                     <div class="r-panel-body">
                        <ul class="m-t-20 chatonline">
                           <li><b>Chat option</b></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
                           <li><a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- /.right-sidebar -->
            </div>