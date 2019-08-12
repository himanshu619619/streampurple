

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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="text-center"><?php echo $page_heading; ?></h3>
                          
                       <?php echo form_open($form_action,'class="form"'); ?>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                    <div class="col-10">
                                       <input type="text" id="example-text" name="name" class="form-control" placeholder="enter your name" required="required" value="<?php echo set_value('name',$name); ?>">
                                        <?php echo form_error('name');?>
                                    </div>
                                </div>
                              
                               <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Select Department</label>
                                    <div class="col-10">
                                     <?php echo form_dropdown('department',$department_option,set_value('department',$department),'class="form-control"'); ?>
                                        <?php echo form_error('department');?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-email-input" class="col-2 col-form-label">Phone</label>
                                    <div class="col-10">
                                        <input type="text" id="example-phone" name="phone_no" class="form-control" placeholder="enter your phone" value="<?php echo set_value('phone_no',$phone_no); ?>">
                                        <?php echo form_error('phone_no');?>
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label for="example-search-input" class="col-2 col-form-label">Email</label>
                                    <div class="col-10">
                                       <input type="email" name="email" class="form-control" placeholder="enter your email"  value="<?php echo set_value('email',$email); ?>">
                                        <?php echo form_error('email');?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-url-input" class="col-2 col-form-label">Address</label>
                                    <div class="col-10">
                                     
                                        <?php echo form_textarea('address',set_value('address',$address),'class="form-control"'); ?>
                                        <?php echo form_error('address');?>


                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-2 col-form-label">Date of Birth</label>
                                    <div class="col-10">
                                       <input type="date" id="bdate" name="date_of_birth" class="form-control mydatepicker" placeholder="enter your birth date" value="<?php echo set_value('date_of_birth',$date_of_birth); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-2 col-form-label">Gender</label>
                                    <div class="col-10">
                                        <?php $array= array(''=>'--select gender','male'=>'Male','Female'=>'Female','other'=>'Other'); ?>

                                     <?php echo form_dropdown('gender',$array,set_value('gender',$gender),'class="form-control"'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Description</label>
                                    <div class="col-10">
                                        <?php echo form_textarea('discription',set_value('discription',$discription),'class="form-control"'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date Of Appoinment </label>
                                    <div class="col-10">
                                        <input class="form-control" type="date"  id="example-datetime-local-input" name="appointment_date" value="<?php echo set_value('appointment_date',@date('Y-m-d',$appointment_date)); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
               <!-- .row -->
               
            </div>


