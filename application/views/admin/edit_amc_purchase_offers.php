
<style type="text/css">


    .error{color:red;}
    #modal {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0%;
    left: 0%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    height: 100%;
    width: 100%;}
    .modalconent {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    width: 37%;
    padding: 20px;
    
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2) {
    .modalconent {
    position: absolute;
    top: 37%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    width: 88%;
    padding: 20px;}
}

</style>






<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title"><?php echo $page_title; ?></h4>
                  </div>
                  <!-- /.page title -->
                 
               </div>
              <!-- .row -->

 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                         <?php if ($flashdata = $this->session->flashdata('success')){  ?>
                          <div class="alert alert-success">
                           <?php echo $flashdata;  ?>
                          </div>
                        <?php } ?>


                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                   <?php echo form_open_multipart($form_action) ?>
                                       <div class="form-body">
                                            <h3 class="box-title">Fill All Details</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Customer Code*</label>
                                                        <input type="text" name="customer_code" value="<?php echo set_value('customer_code',$customer_code); ?>" class="form-control" placeholder="Enter Code"> <span class="help-block"> <?php echo form_error('customer_code'); ?> </span> </div>


                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Customer Name*</label>
                                                        <input type="text" name="customer_name"  
                                                        value="<?php echo set_value('customer_name',$customer_name); ?>" class="form-control" placeholder="Enter Name"> <span class="help-block">  <?php echo form_error('customer_name'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                         <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Customer Address*</label>
                                                        <input type="text" name="customer_address"class="form-control" placeholder="Enter Address" value="<?php echo set_value('customer_address',$customer_address); ?>"> <span class="help-block">  <?php echo form_error('customer_address'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Customer City*</label>
                                                        <input type="text" name="customer_city"  class="form-control" value="<?php echo set_value('customer_city',$customer_city); ?>" placeholder="Enter City"> <span class="help-block">  <?php echo form_error('customer_city'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                       
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Pin Code*</label>
                                                        <input type="text" name="pin_code"class="form-control" placeholder="Enter Pin Code" value="<?php echo set_value('pin_code',$pin_code) ?>"> <span class="help-block">  <?php echo form_error('pin_code'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Customer Mobile Number*</label>
                                                        <input type="text" name="customer_mobile"  class="form-control" placeholder="Enter Mobile No." value="<?php set_value('customer_mobile',$customer_mobile) ?>"> <span class="help-block">  <?php echo form_error('customer_mobile'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Product Category</label>
                                                        <?php  
                                                        $options = array('Washing Machine'=>'Washing Machine','Kitchen Product'=>'Kitchen Product','Health Product'=>'Health Product','American Samora'=>'American Samora');
                                                        echo form_dropdown('product_category', $options,set_value('Washing Machine'), 'class="form-control"'); ?>
                                                       <!--  <input type="text" name="product_category"class="form-control" placeholder="select product category"> -->

                                                         <span class="help-block">  <?php echo form_error('product_category'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Machine Serial Number</label>
                                                        <input type="text" name="machine_serial"  class="form-control" placeholder="Enter Serial Number" value="<?php set_value('machine_serial',$machine_serial) ?>"> <span class="help-block">  <?php echo form_error('machine_serial'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>


<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Model</label>
                                                        <input type="text" name="model"class="form-control" placeholder="Enter Model" value="<?php echo set_value('model',$model); ?>"> <span class="help-block">  <?php echo form_error('model'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Brand</label>
                                                        <input type="text" name="brand"  class="form-control" placeholder="Enter Brand" value="<?php echo set_value('brand',$brand); ?>"> <span class="help-block">  <?php echo form_error('brand'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Date of Purchase</label>
                                                        <input type="date" name="date_of_purchase"class="form-control" placeholder="Enter Date of Purchase" value="<?php set_value('date_of_purchase',$date_of_purchase) ?>"> <span class="help-block">  <?php echo form_error('date_of_purchase'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Picture of Machine</label>
                                                        <input type="file" name="picture_machine"  class="form-control" placeholder="upload Picture of Machine" value="<?php set_value('picture_machine',$picture_machine) ?>"> <span class="help-block">  <?php echo form_error('picture_machine'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Certified by Service Center</label>
                                                        <input type="text" name="certified"class="form-control" placeholder="certified" value="<?php set_value('certified',$certified) ?>"> <span class="help-block">  <?php echo form_error('certified'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Machine Status</label>
                                                        <input type="text" name="machine_status"  class="form-control" placeholder="Enter Machine Status" value="<?php set_value('machine_status',$machine_status) ?>"> <span class="help-block">  <?php echo form_error('machine_status'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Technecian Mobile No.</label>
                                                        <input type="text" name="technecian"class="form-control" placeholder="Enter technecian Mobile No." value="<?php set_value('technecian',$technecian)  ?>"> <span class="help-block">  <?php echo form_error('technecian'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">ICR No.</label>
                                                        <input type="text" name="icr_no"  class="form-control" placeholder="Enter ICR No."  value="<?php echo set_value('icr_no',$icr_no)  ?>"> <span class="help-block">  <?php echo form_error('icr_no'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ICR Date</label>
                                                        <input type="date" name="icr_date"class="form-control" placeholder="Enter ICR Date" value="<?php echo set_value('icr_date',$icr_date)  ?>"> <span class="help-block">  <?php echo form_error('icr_date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Free of Cost Material Given</label>
                                                        <input type="text" name="free_cost"  class="form-control" placeholder="Yes" value="<?php echo set_value('free_cost',$free_cost)  ?>"> <span class="help-block">  <?php echo form_error('free_cost'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ICR Picture</label>
                                                        <input type="file" name="icr_picture"class="form-control" placeholder="Enter Pin Code" value="<?php set_value('icr_picture',$icr_picture)  ?>"> <span class="help-block">  <?php echo form_error('icr_picture'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">AMC Start Date</label>
                                                        <input type="date" name="amc_Date"  class="form-control" placeholder="Enter Start Date" value="<?php echo set_value('amc_Date',$amc_Date)  ?>"> <span class="help-block">  <?php echo form_error('amc_Date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">AMC End Date</label>
                                                        <input type="date" name="amc_end_date"class="form-control" placeholder="Enter AMC End Date" value="<?php echo set_value('amc_end_date',$amc_end_date)  ?>"> <span class="help-block">  <?php echo form_error('amc_end_date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Payment Mode </label>
                                                        <select class="form-control" name='payment_mode' >
                                                            <option value="cash">cash in Hand</option>
                                                            <option value="bycard">By Card</option>
                                                              <option value="netbanking">Net Banking</option>
                                                        </select> 

                                                        <span class="help-block">  <?php echo form_error('payment_mode'); ?></span> 

                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">CHQ No</label>
                                                        <input type="text" name="chq_no"class="form-control" placeholder="Enter CHQ No" value="<?php echo set_value('chq_no',$chq_no)  ?>"> <span class="help-block">  <?php echo form_error('chq_no'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">CHQ Picture</label>
                                                        <input type="file" name="chq_picture"  class="form-control" placeholder="Enter CHQ Picture" value="<?php echo set_value('chq_picture',$chq_picture)  ?>"> <span class="help-block">  <?php echo form_error('chq_picture'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">CHQ Amount</label>
                                                        <input type="text" name="chq_amount"class="form-control" placeholder="Enter CHQ Amount" value="<?php echo set_value('chq_amount',$chq_amount)  ?>"> <span class="help-block">  <?php echo form_error('chq_amount'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Technecian Name*</label>
                                                        <input type="text" name="technecian_name"  class="form-control" value="<?php echo set_value('technecian_name',$technecian_name)  ?>" placeholder="Enter Technecian Name" > <span class="help-block">  <?php echo form_error('technecian_name'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <!-- /.row -->
               
            </div>

        </div>
  