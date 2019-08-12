<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title"><?php echo $page_title; ?></h4>
                  </div>
                  <!-- /.page title -->
                  <!-- .breadcrumb -->
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active"><?php echo $page_title; ?></li>
                     </ol>
                  </div>
                  <!-- /.breadcrumb -->
               </div>
               <!-- .row -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="text-center"><?php echo $page_title; ?></h2>


<div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                              <th>Patient Name</th>
                                              <th>phone</th>
                                              <th>Email</th>
                                              
                                              <th>Department</th>
                                              <th>Appoitment Date</th>
                                              <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_patient as $value) {  ?>
                                        <tr>
                                            <td><b><?php echo strtoupper($value->fname); ?></b></td>
                                             <td><?php echo $value->mobile;?></td>
                                            <td><?php echo $value->email;?></td>
                                          

                                           <td><?php echo $service_option[$value->dr_type]; ?></td>
                                          
                                            <td><b><?php echo date('d-M-Y',$value->appointment_date);?></b></td>
                                           
                                          
                                            
                                       
                                        <td>
                                                <a href="<?php echo  base_url('Doctor/clinic_patient_profile/'. $value->id);?>"  class="btn btn-info waves-effect waves-light m-r-10 fa fa-eye btn-rounded">&nbsp  View</a>

                                                 <a href="<?php echo  base_url('Doctor/add_patient/'. $value->id);?>"  class="btn btn-success waves-effect waves-light m-r-10 fa fa-eye btn-rounded">&nbsp  Edit</a>

                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>


                     </div>
                  </div>
               </div>
               <!-- .row -->
               <!-- .right-sidebar -->
             
               <!-- /.right-sidebar -->
            </div>