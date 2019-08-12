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
                     <?php echo form_open_multipart('Doctor/add_clinic'); ?>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Clinic Name</label>
                                    <div class="col-10">
                                       <input type="text" id="example-text" name="clinic_name" class="form-control" placeholder="enter Clinic" required="required" >
                                        <?php echo form_error('clinic_name');?>
                                    </div>
                                </div>
                              
                               <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">clinic License no.</label>
                                    <div class="col-10">
                                       <input type="text" id="example-text" name="drug_license_number" class="form-control" placeholder="enter linic License no." required="required" value="">
                                        <?php echo form_error('name');?>
                                    </div>
                                </div>

<div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Clinic Photo.</label>
                                    <div class="col-10">
                                       <input type="file" id="example-text" name="clinic_photo" class="form-control"  required="required" >
                                        <?php echo @$upload_error;?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Address.</label>
                                    <div class="col-10">
                                       <input type="text" id="example-text" name="clinic_address" class="form-control" placeholder="enter Address" required="required" value="">
                                        <?php echo form_error('Address');?>
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
               <!-- .right-sidebar -->
              
               <!-- /.right-sidebar -->
            </div>