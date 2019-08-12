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
                        <h5 class="box-title">
                           <?php if($feedback=$this->session->flashdata('feedback')){?>
                        <div class="alert alert-success">
                            <?php echo  $feedback;?>
                        </div>
                        <?php } ?>
                        </h5>
                        <h3 class="text-center"><?php echo $page_title; ?></h3>

                        <div class="form-group row">
                        <label for="example-password-input" class="col-2 col-form-label" >Select Pharmacy</label>
                        <div class="col-10" >
                          <?php echo form_dropdown('pharmacy_id',$pharmacy_option,set_value('pharmacy_id'),'class="form-control"'); ?>
                            <?php echo form_error('address');?>
                        </div>
                    </div>
                       <?php echo  form_open_multipart('Doctor/order_medicine_to_doctor')?>
                        <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Upload Medicine Pic/Doc/excel file etc.</label>
                        <div class="col-10">
                            <input class="form-control" type="file" placeholder="" name="medicine_file" required="required">
                            <?php echo form_error('fname');?>
                        </div>
                    </div>

                    <div class="form-group row ">
                     <div class="col-10" >
                      <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 ">Submit</button>
                     
                    </div>
                </div>
             </form>
         </div>


 
   <div class="col-md-12">
      <div class="white-box">
                            <h3 class="text-center">All Order Medicine List</h3>
                        
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($all_order as $key => $value) { $i=1;?>
                                    
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $value->profile_id; ?></td>
                                            <td><img src="<?php echo $value->medicine_file; ?>" style="height: 100px;"></td>
                                            <td><?php echo $value->created; ?></td>
                                          
                                        </tr>

                                        <?php }  ?>
              </tbody>
            </table>
          </div>

   </div>
   <!-- .row -->
  
</div>
</div>
</div>
</div>
</div>
