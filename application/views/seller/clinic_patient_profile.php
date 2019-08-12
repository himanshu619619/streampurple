<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">Patient Profile</h4>
                  </div>
                  <!-- /.page title -->
                  <!-- .breadcrumb -->
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     
                        <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Patient Profile</li>
                     </ol>
                  </div>
                  <!-- /.breadcrumb -->
               </div>
               <!-- .row -->
               
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                           
                            <div class="user-bg"> 
                            
                              <img width="100%" alt="user" src="<?php echo  base_url('assets/theme/img/patient.jpg');?>" class="img-circle" style="height: 100px; width: 100px;" >
                           
                            </div>
                           
                           
                            
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Name</strong>
                                        <p><?php echo $patient_profile->name;?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Phone</strong>
                                        <p><?php echo $patient_profile->phone_no; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center">Patient Profile</h3>
                                 <div class="table-responsive">
                                  <table class="table">
                                   
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td><?php echo $patient_profile->name; ?></td>
                                           
                                        </tr>
                                       <tr>
                                            <th>Apointment Date</th>
                                            <td><?php echo $patient_profile->appointment_date; ?></td>
                                           
                                        </tr>

                                           <tr>
                                            <th>Departmemt</th>
                                            <td><?php echo $department_option[$patient_profile->department]; ?></td>
                                           
                                        </tr>


                                          <tr>
                                            <th>Email</th>
                                            <td><?php echo $patient_profile->email; ?></td>
                                           
                                        </tr>

                                          <tr>
                                            <th>Address</th>
                                            <td><?php echo $patient_profile->address; ?></td>
                                           
                                        </tr>

                                          <tr>
                                            <th>Gender</th>
                                            <td><?php echo $patient_profile->gender; ?></td>
                                           
                                        </tr>

                                          <tr>
                                            <th>Date Of Birth</th>
                                            <td><?php echo $patient_profile->date_of_birth; ?></td>
                                           
                                        </tr>

                                          <tr>
                                            <th>Description</th>
                                            <td><?php echo $patient_profile->discription; ?></td>
                                           
                                        </tr>

                                      </tbody>
                                    </table>
                                 </div>  
                                </div>
                              <a href="<?php echo base_url('Doctor/clinic_booking'); ?>"> <button class="btn btn-info">Back</button></a> 
                            </div>
                        
                        </div>
                    </div>
                </div>
                <!-- /.row -->
               <!-- .row -->
               
            </div>