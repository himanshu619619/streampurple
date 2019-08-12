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


                 
            <div class="row">
<?php foreach ($view_clinic as $value) { ?>  
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin:auto;">
                         <center>
                  <div class="white-box" >
                   <div class="el-card-item">
<?php echo form_open('Doctor/activate_clinic'); ?>
                                <img src="<?php  echo $value->clinic_photo; ?>" width="150px"; height="150px" class="img-circle">
                                <div class="el-card-content">
                                <br>
                              
                               
                                
                                <h5 class="box-title"><?php  echo $value->clinic_name; ?></h5><br>
                                  <label for="example-text-input" class="box-title">Address:</label>
                                 <small class=""><?php  echo $value->clinic_address;; ?></small><br>
                                 <label for="example-text-input" class="box-title">Cinic drug license number:</label>
                                 <small class=""><?php  echo $value->drug_license_number; ?></small><br>
                                 
                                    <br/>

                                 <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Active</button>
                   

                    </div></form>
                    </div>
                    </div>
          
                   
                    </center>
                    </div>


<?php } ?>

     

                  

               <!-- .row -->
               <!-- .right-sidebar -->
              
               <!-- /.right-sidebar -->
              </div> 
              <br>

                 
  



         </div>  

            

           