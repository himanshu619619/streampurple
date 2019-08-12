
<style type="text/css">
    
    .error{

    color:red;
}
</style>
<link href="<?php echo base_url('assets/user');?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">

 <link href="<?php echo base_url('assets/user');?>/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
        <!-- Left navbar-header end -->
        <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Add Medicine</h4>
                 </div>
            <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                <ol class="breadcrumb">
                    <li><a href="#">Hospital</a></li>
                    <li class="active">Doctor Schedule</li>
                </ol>
            </div> -->
            
        </div>
<!-- row -->
<div class="row">
  <div class="col-sm-12">
      <div class="white-box">
         <?php if($feedback=$this->session->flashdata('feedback')){?>
         <div class="form-group row">
            <div class="alert alert-success">

                 <?php echo $feedback; ?>
               </div>
              </div>
              <?php } ?>
           
          <?php echo form_open('Doctor/add_doctor_medicine');?>
              
              <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Medicine Name</label>
                  <div class="col-8">
                      <input class="form-control" type="text" name="medicine_name" id="">   
                      <div class="error">         
                    <?php echo form_error('medicine_name');?>
                  </div>
                  </div>
                  
              </div>
              
              <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Company Name</label>
                  <div class="col-8">
                      <input class="form-control" type="text" name="company_name" id="">   
                      <div class="error">         
                    <?php echo form_error('company_name');?>
                  </div>
                  </div>
                  
              </div>
              <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">salt</label>
                  <div class="col-8">
                      <input class="form-control" type="text" name="salt" id="">   
                      <div class="error">         
                    <?php echo form_error('salt');?>
                  </div>
                  </div>
                  
              </div>
               
               <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">manufacture date</label>
                  <div class="col-8">
                      <input class="form-control" type="date" name="manufacture_date" id="">   
                     
                  </div>
                  
              </div>
              <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">expiry date</label>
                  <div class="col-8">
                      <input class="form-control" type="date" name="expiry_date" id="">   
                      
                  </div>
                  
              </div>

              <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Description</label>
                  <div class="col-8">
                      <textarea class="form-control" rows="5" name="description"></textarea>   
                      <div class="error">         
                    <?php echo form_error('medicine_name');?>
                  </div>
                  </div>
                  
              </div>
             
              <br>
             <!-- <?php echo form_open_multipart('Pharmacy/file_upload');?>
              <div class="form-group row">
                  <label for="example-url-input" class="col-2 col-form-label">Attech Excel Sheet</label>
                  <div class="col-8">
                 <input class="form-control" type="file" name="upload_file" id="">
                  <?php echo form_error('upload_file');?>
                       
                  </div>
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Upload</button>
              </div> -->

              <div class="form-group row">
                 <div class="col-10">
                  <button type="submit"  class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                  
                </div>
            </div>
                           
            </form>
        </div>
      </div>
    </div>
</div>

            <!-- /.container-fluid -->
      
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <!-- Calendar JavaScript -->
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/calendar/jquery-ui.min.js"></script>
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/moment/moment.js"></script>
    <script src='<?php echo  base_url('assets/user');?>/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/calendar/dist/cal-init.js"></script>
    <!--Style Switcher -->
   

