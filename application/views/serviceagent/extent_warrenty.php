






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
                                                        <input type="text" name="customer_code"class="form-control" placeholder="Enter Code"> <span class="help-block"> <?php echo form_error('customer_code'); ?> </span> </div>


                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Customer Name*</label>
                                                        <input type="text" name="customer_name"  class="form-control" placeholder="Enter Name"> <span class="help-block">  <?php echo form_error('customer_name'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                         <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">

<label class="control-label">Customer Email</label>
                                                        <input type="text" name="customer_email"  class="form-control" placeholder="Enter Customer Email"> <span class="help-block">  <?php echo form_error('customer_email'); ?></span> </div>


                                                        
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Customer City*</label>
                                                        <input type="text" name="customer_city"  class="form-control" placeholder="Enter City"> <span class="help-block">  <?php echo form_error('customer_city'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                       
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Pin Code*</label>
                                                        <input type="text" name="pin_code"class="form-control" placeholder="Enter Pin Code"> <span class="help-block">  <?php echo form_error('pin_code'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Customer Mobile Number*</label>
                                                        <input type="text" name="customer_mobile"  class="form-control" placeholder="Enter Mobile No."> <span class="help-block">  <?php echo form_error('customer_mobile'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                               
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                     <label class="control-label">Customer Address*</label>
                                                        <input type="text" name="customer_address"class="form-control" placeholder="Enter Address"> <span class="help-block">  <?php echo form_error('customer_address'); ?></span> </div>   
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
                                                        <input type="text" name="machine_serial"  class="form-control" placeholder="Enter Serial Number"> <span class="help-block">  <?php echo form_error('machine_serial'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>


<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Model</label>
                                                        <input type="text" name="model"class="form-control" placeholder="Enter Model"> <span class="help-block">  <?php echo form_error('model'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Brand</label>
                                                        <input type="text" name="brand"  class="form-control" placeholder="Enter Brand"> <span class="help-block">  <?php echo form_error('brand'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>


<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Company Warranty Start Date</label>
                                                        <input type="date" name="compay_warranty_start"class="form-control" placeholder="Enter Company Warranty Start Date"> <span class="help-block">  <?php echo form_error('compay_warranty_start'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Company Warranty End Date</label>
                                                        <input type="date" name="compay_warranty_end"  class="form-control" placeholder="Enter Company Warranty End Date"> <span class="help-block">  <?php echo form_error('compay_warranty_end'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Dealer From Which Purchased</label>
                                                        <input type="text" name="dealer_date"class="form-control" placeholder="Enter Dealer From Which Purchased"> <span class="help-block">  <?php echo form_error('dealer_date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Dealer Invoice Pic</label>
                                                        <input type="file" name="dealer_invoice_pic"  class="form-control" placeholder="Enter Dealer Invoice Pic"> <span class="help-block">  <?php echo form_error('brand'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>




<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Date of Purchase</label>
                                                        <input type="date" name="date_of_purchase"class="form-control" placeholder="Enter Date of Purchase"> <span class="help-block">  <?php echo form_error('date_of_purchase'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Picture of Machine</label>
                                                        <input type="file" name="picture_machine"  class="form-control" placeholder="upload Picture of Machine"> <span class="help-block">  <?php echo form_error('picture_machine'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Certified by Service Center</label>
                                                        <input type="text" name="certified"class="form-control" placeholder="certified"> <span class="help-block">  <?php echo form_error('certified'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Machine Status</label>
                                                        <input type="text" name="machine_status"  class="form-control" placeholder="Enter Machine Status"> <span class="help-block">  <?php echo form_error('machine_status'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                              <div class="row">
                                                <div class="col-md-12">
                                                    <label class="control-label">Free of Cost Material Given</label>
                                                        <input type="text" name="free_cost"  class="form-control" placeholder="Yes"> <span class="help-block">  <?php echo form_error('free_cost'); ?></span> </div> 
                                               
                                                <!--/span-->
                                               
                                                <!--/span-->
                                            </div>
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Technecian Mobile No.</label>
                                                        <input type="text" name="technecian"class="form-control" placeholder="Enter technecian Mobile No."> <span class="help-block">  <?php echo form_error('technecian'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">ICR No.</label>
                                                        <input type="text" name="icr_no"  class="form-control" placeholder="Enter ICR No."> <span class="help-block">  <?php echo form_error('icr_no'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ICR Date</label>
                                                        <input type="date" name="icr_date"class="form-control" placeholder="Enter ICR Date"> <span class="help-block">  <?php echo form_error('icr_date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">


                                                        <label class="control-label">ICR Amount</label>
                                                        <input type="text" name="icr_amount"class="form-control" placeholder="Enter ICR amount"> <span class="help-block">  <?php echo form_error('icr_amount'); ?></span> </div>

                                                       
                                                </div>
                                                <!--/span-->
                                            </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">ICR Picture</label>
                                                        <input type="file" name="icr_picture"class="form-control" placeholder="Enter Pin Code"> <span class="help-block">  <?php echo form_error('icr_picture'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">AMC Start Date</label>
                                                        <input type="date" name="amc_Date"  class="form-control" placeholder="Enter Start Date"> <span class="help-block">  <?php echo form_error('amc_Date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">AMC End Date</label>
                                                        <input type="date" name="amc_end_date"class="form-control" placeholder="Enter AMC End Date"> <span class="help-block">  <?php echo form_error('amc_end_date'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Payment Mode </label>
                                                        <select class="form-control" name='payment_mode'>
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
                                                        <input type="text" name="chq_no"class="form-control" placeholder="Enter CHQ No"> <span class="help-block">  <?php echo form_error('chq_no'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">CHQ Picture</label>
                                                        <input type="file" name="chq_picture"  class="form-control" placeholder="Enter CHQ Picture"> <span class="help-block">  <?php echo form_error('chq_picture'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">CHQ Amount</label>
                                                        <input type="text" name="chq_amount"class="form-control" placeholder="Enter CHQ Amount"> <span class="help-block">  <?php echo form_error('chq_amount'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Technecian Name*</label>
                                                        <input type="text" name="technecian_name"  class="form-control" placeholder="Enter Technecian Name"> <span class="help-block">  <?php echo form_error('technecian_name'); ?></span> </div>
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
  