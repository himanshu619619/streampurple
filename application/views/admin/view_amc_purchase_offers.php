
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
                  
                    <div class="col-md-4 col-xs-12">
                   
                        <div class="white-box">
                           
                            <div class="user-bg text-center" style="display: flex; justify-content:center; align-items:center; "> <img width="100%" height=" alt="user" src="<?php echo base_url('uploads/customer_photo')?>/<?php echo $view_amc_purchase_offers->picture_machine ? $view_amc_purchase_offers->picture_machine : '/service.png'; ?>"  > </div><br>
                            <center><h4 class="center"><strong>Machine Image</strong></h4> </center> 
                            <div class="user-btm-box">
                                <!-- .row -->
                              
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Technician Name</strong>
                                        <p> <?php echo $view_amc_purchase_offers->technecian_name; ?> </p>
                                    </div>
                                    <div class="col-md-6"><strong>Technicial Number</strong>
                                        <p><?php echo $view_amc_purchase_offers->technecian; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Paid /unpaid by Client</strong>
                                        <p><?php echo $view_amc_purchase_offers->paid ==0 ? 'Unpaid' :'paid'; ?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Machine Status</strong>
                                        <p><?php echo $view_amc_purchase_offers->machine_status; ?></p>
                                    </div>
                                </div>
                                <!-- /.row --><br>
                                <hr>
                                <div class="row text-center m-t-10">
                                    
                               
                                    <div class="col-md-12">
                                        <p style="display: flex; justify-content:center; align-items:center; "><img src="<?php echo base_url('uploads/customer_photo/'); echo $view_amc_purchase_offers->icr_picture ?$view_amc_purchase_offers->icr_picture :'/service.png'; ?>" class="zoom"style="width:100px; height:100px;"></p>
                                        <strong>ICR Picture</strong>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="display: flex; justify-content:center; align-items:center; "><img src="<?php echo base_url('uploads/customer_photo/');echo $view_amc_purchase_offers->chq_picture ? $view_amc_purchase_offers->chq_picture : '/service.png'; ?>" class="zoom" style="width:100px;height:100px;"></p>
                                        <strong>Chaque Picture</strong>
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
                                <div class="col-md-4 col-xs-6 b-r"> <strong>Customer Name</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $view_amc_purchase_offers->customer_name; ?></p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>Customer Mobile</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $view_amc_purchase_offers->customer_mobile; ?></p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>Customer Email</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $view_amc_purchase_offers->customer_email; ?></p>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                            <div class="col-md-8 col-xs-6 b-b"><hr>
                                    <strong>Customer Address</strong> <br><?php echo $view_amc_purchase_offers->customer_address; ?><br><br>
                            </div>
                            <div class="col-md-4 col-xs-6 b-b b-l"><hr>
                                    <strong>Customer Code</strong> <br><?php echo $view_amc_purchase_offers->customer_code; ?><br><br>
                            </div>
                            <div class="col-md-6 col-xs-6 b-r"><br> <strong> City</strong><br><?php echo $view_amc_purchase_offers->customer_city; ?></div> 
                            <div class="col-md-6 col-xs-6 b-r"> <br><strong> Pin Code</strong><br><?php echo $view_amc_purchase_offers->pin_code; ?></div>
                            
                            </div>
                            <hr>

                            <div class="row">
                            <div class="col-md-4 col-xs-6 b-r"> 
                            <strong>Machine Serial</strong>  <br>            
                            <p><?php echo $view_amc_purchase_offers->machine_serial; ?></p>
                             </div>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>Model </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->model; ?></p>
                             </div>

                             <div class="col-md-4 col-xs-6 ">  
                             <strong>Brand </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->brand; ?></p>
                             </div>

                            </div>
                           <hr>
                           <div class="row">
                            <div class="col-md-4 col-xs-6 b-r"> 
                            <strong>Purchase Date</strong>  <br>            
                            <p><?php echo $view_amc_purchase_offers->date_of_purchase; ?></p>
                             </div>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>ICR Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->icr_date; ?></p>
                             </div>

                             <div class="col-md-4 col-xs-6 ">  
                             <strong>ICR No </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->icr_no; ?></p>
                             </div>

                            </div>
                           <hr>

                           <div class="row">
                            <div class="col-md-4 col-xs-6 b-r"> 
                            <strong>Certified</strong>  <br>            
                            <p><?php echo $view_amc_purchase_offers->certified; ?></p>
                             </div>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>AMC Start Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->amc_Date; ?></p>
                             </div>

                             <div class="col-md-4 col-xs-6 ">  
                             <strong>AMC End Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->amc_end_date; ?></p>
                             </div>

                            </div>
                           <hr>
                           
                           <div class="row">
                            <div class="col-md-4 col-xs-6 b-r"> 
                            <strong>Certified</strong>  <br>            
                            <p><?php echo $view_amc_purchase_offers->certified; ?></p>
                             </div>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>AMC Start Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->amc_Date; ?></p>
                             </div>

                             <div class="col-md-4 col-xs-6 ">  
                             <strong>AMC End Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->amc_end_date; ?></p>
                             </div>

                            </div>
                           <hr>
                           <div class="row">
                            <div class="col-md-4 col-xs-6 b-r"> 
                            <strong>Free Cost</strong>  <br>            
                            <p><?php echo $view_amc_purchase_offers->free_cost; ?></p>
                             </div>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>ICR Amount </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->icr_amount  ; ?></p>
                             </div>

                             <div class="col-md-4 col-xs-6 ">  
                             <strong>Payment Mode </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->payment_mode; ?></p>
                             </div>

                            </div>
                           <hr>
                            
                           <div class="row">
                               <?php  if($view_amc_purchase_offers->dealer_invoice_pic){ ?>
                            <div class="col-md-4 col-xs-6 b-r" > 
                            <strong>Dealer Invoice Pic</strong>  <br>            
                            <p style="display:flex; justify-content:center; align-items:center; "><img src="<?php echo base_url('uploads/customer_photo/');echo $view_amc_purchase_offers->dealer_invoice_pic ? $view_amc_purchase_offers->dealer_invoice_pic :'/service.png'; ?>"class="zoom" style="width:100px; height:100px;"></p>
                             </div>
                              <?php  } ?>
                          <?php  if($view_amc_purchase_offers->dealer_date){ ?>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>Dealer Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->dealer_date; ?></p>
                             </div>
                               <?php  } ?>

                            <?php  if($view_amc_purchase_offers->compay_warranty_start){ ?>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>Company Warranty Start Date </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->compay_warranty_start; ?></p>
                             </div>
                            <?php  } ?>
                            <hr>
                            </div>
                           
                           
                           <div class="row">
                                 <?php  if($view_amc_purchase_offers->compay_warranty_end){ ?>
                           <div class="col-md-4 col-xs-6 ">  
                             <strong>Comany Warranty End </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->compay_warranty_end; ?></p>
                             </div>
                               <?php  } ?>
                            <div class="col-md-4 col-xs-6 b-r"> 
                            <strong>Chq Number</strong>  <br>            
                            <p><?php echo $view_amc_purchase_offers->chq_no; ?></p>
                             </div>
                             <div class="col-md-4 col-xs-6 ">  
                             <strong>Chq Amount </strong> <br>        
                             <p><?php echo $view_amc_purchase_offers->chq_amount; ?></p>
                             </div>

                             

                            </div>
                           <hr>
                            
                           
                           
                            
                            
                           
                           
                          
                           




                           
                        
                        </div>
                    </div>
                </div>



                            </div>
                        </div>
                  
              
                <!-- /.row -->
               
          