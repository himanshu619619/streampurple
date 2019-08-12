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
                        <h3 class="box-title">Date:  <?php echo $d=date("d-m-y");?> </h3>


<div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>phone</th>
                                             <th>Email</th>
                                            <th>Gender</th>
                                            <th>Department</th>
                                            
                                            <th>Appointment</th>                                                                 <th>Action </th>      
                                        
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($booking_time as $value) { $i =1;  ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><img src="<?php echo $value->photo; ?>" style="height: 100px; width: 100px;" class="img-circle"></td>
                                            <td><b><?php echo strtoupper($value->fname); ?></b></td>
                                               <td><?php echo $value->mobile;?></td>
                                                  <td><?php echo $value->email;?></td>
                                        
                                            <td><?php echo $value->gender;?></td>
                                            <td><?php echo @$department_option[$value->department]; ?></td>
                                           
                                            <td><b><?php echo date('d-M-Y',$value->appointment_date);?></b></td>
                                                                                                                  
                                            
                                       
                                          <td>
                                                <a href="<?php echo  base_url('Doctor/patient_profile/'. $value->profile_id);?>"  class="btn btn-info waves-effect waves-light m-r-10 fa fa-eye btn-rounded">&nbsp  View</a>

                                              
                                            </td>
                                            <td>
                                              <a href="<?php echo  base_url('Doctor/delete_user/'. $value->appoint_id);?>"  class="btn btn-danger fa fa-trash-o">&nbsp  </a>
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