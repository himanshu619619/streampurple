        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                   <!--  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hospital Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Hospital</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div> -->
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="white-box">
                             <div class="row" style="margin:20px">

                                <div class="col-md-4 col-sm-4 text-center">
                                <br> 
                                    <img src="<?php echo $user->photo;?>" alt="user"   class="img-rounded img-responsive">
                                </div>
                                <div class="col-md-8 col-sm-8" style="padding-left:20px;" >
                                    <h3 class="box-title m-b-0" style="padding-left:40px;">Date:&nbsp;<?php echo date("d-m-y"); ?>  </h3> 

                                        <ul>
                                        <li>
                                        Total Patient: <?php echo $totalpatient; ?>
                                        </li>
                                        <li>

                                      Free Patient:<?php echo $freepatient; ?></li>

                                      <li>Half Patient: <?php echo $halfpaidpatient; ?>
                                   </li> 
                                   <li>full Paid Patient: <?php echo $fullpaidpatient; ?></li>
                                           
                                    </ul>

                                    <div style="margin-left:10px">
                                  <a href="/docmed/Doctor/doc_profile"><span class="label label-info m-r-10">Click Here for more detail</span></a></div>
                                </div>
                            
  


                            </div>
                        </div>
                    </div>
                   
                   
                    <div class="col-md-7 col-sm-6">
                        <div class="white-box">
                            
<div class="table-responsive">
                <table class="table table-bordered" style="text-align:center;">
                    <thead>
                        <tr >
                            <th style="text-align:center;" colspan="2" >All Reminder</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($reminder as $value){ ?>  
                      <tr>
                          <td><a href="<?php echo base_url('Doctor/reminder')?>"><?php echo $value->title;;?></a></td><td><?php echo $value->date;?></td>
                            
                      </tr>
                   <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        



                        </div>
                    </div>
                </div>
                <!--/row -->
                <!-- .row -->
                
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">New Patients</h3>
                           <div class="table-responsive">
                                <table class="table color-table info-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Appointment Date</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $i=1; foreach($newpatient as $value) { ?>
   


                                        <tr>
                                            <td><?php echo $i++; ?> </td>
                                            <td><?php echo $value->fname; ?> </td>
                                            <td><?php echo date('Y-m-d',$value->appointment_date); ?> </td>
                                            <td><?php echo $value->description; ?> </td>
                                        </tr>
                                       
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
    



                        </div>
                    </div>
                   
                    </div>
                </div>
                <!-- row -->
              
            </div>
            <!-- /.container-fluid -->
          