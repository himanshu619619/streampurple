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
                     
 <form action="<?php echo base_url('Doctor/Patient_limit'); ?>" method="post" id=""> 
           <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Patient Limit:</label>
                                    <div class="col-10">
                                       <input type="number" id="example-text" name="Patient_limit" class="form-control" plceholder="Enter limit" required="required" value="">
                                 
                                    </div>

                                </div>

                             <div class="form-group row">
                             
                             <div class="col-md-12">
                             <br><center>
  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button></center></div>
                             </div>   

</form>

                     </div>
                  </div>
               </div>
               <!-- .row -->
               <!-- .right-sidebar -->
              
               <!-- /.right-sidebar -->
            </div>