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

<?php $patient = $this->doctor_ref->get_today_patient($doctor_id);  ?>

               <!-- .row -->
                  <?php if (@$patient[$id]) {  ?>
                   
            <div class="row">

                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin:auto;">
                         <center>
                  <div class="white-box" >
                   <div class="el-card-item">

                                <img src="<?php   echo $patient[$id]->photo; ?>" width="150px"; height="150px" class="img-circle">
                                <div class="el-card-content">
                                <br>
                                <label for="example-text-input" class="">Name:</label>
                                <small class=""><?php  echo @$patient[$id-1]->fname; ?></small><br>
                                <label for="example-text-input" class="">Date of App.:</label>
                                <small class=""><?php  echo date('d-M-Y',@$patient[$id]->appointment_date); ?></small><br>
<label for="example-text-input" class="">Gender:</label>
                                 <small class=""><?php echo @$patient[$id-1]->gender; ?></small><br>
                                 <label for="example-text-input" class="">Mobile:</label>
                                 <small class=""><?php echo @$patient[$id-1]->mobile; ?></small><br>
                                 <label for="example-text-input" class="">Date of Birth:</label>
                                 <small class=""><?php echo @$patient[$id-1]->dob; ?></small><br>
                                    <label for="example-text-input" class="">Address:</label>
                                <small><?php  echo @$patient[$id-1]->address; ?></small>
                                    <br/>
                    </div>
                    </div>
                    </div>
                    <br> <br>
                    <center> 


                    

                    </center>
                    </center>
                    </div>


<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="margin:auto;">
                         <center>
                        <div class="white-box" >
                            <div class="el-card-item">

                                <img src="<?php echo $patient[$id]->photo; ?>" width="200px"; height="200px" class="img-rounded">
                                <div class="el-card-content">
                                <br>

                                 <label for="example-text-input" class="">Name:</label>
                                <small class=""><?php  echo $patient[$id]->fname; ?></small><br>
                                <label for="example-text-input" class="">Date:</label>
                                 <small class=""><?php echo date('d-M-Y',$patient[$id]->appointment_date); ?></small><br>
                                <label for="example-text-input" class="">Gender:</label>
                                 <small class=""><?php echo @$patient[$id]->gender; ?></small><br>
                                 <label for="example-text-input" class="">Mobile:</label>
                                 <small class=""><?php echo @$patient[$id]->mobile; ?></small><br>
                                 <label for="example-text-input" class="">Date of Birth:</label>
                                 <small class=""><?php echo @$patient[$id]->dob; ?></small><br>

                                    <label for="example-text-input" class="">Address:</label>
                                    <small><?php echo $patient[$id]->address; ?></small>
                                    <br/>
                                </div>
                            </div>
                        </div>
 
    <div class=" row"  >

  <div class=" col-md-6"  >
    <div class="btn btn-info ">
<a style="color:white; " href="<?php  echo base_url('Doctor/observation/'.($id-1)); ?>" >Previous</a>

    </div></div>
  <div class=" col-md-6" style="float:right;" >
    <div class="btn btn-info">
<a style="color:white;  padding: 30px;"  href="<?php echo base_url('Doctor/observation/'.$id); ?>" >Next </a>
    </div></div>
                 
                       
     </div>
                        </center>

                      
                    </div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin:auto;">
                         <center>
                        <div class="white-box" >
                            <div class="el-card-item">

                                <img src="<?php echo $patient[$id]->photo; ?>" width="150px"; height="150px" class="img-circle">
                                <div class="el-card-content">
                                <br>

                                 <label for="example-text-input" class="">Name:</label>
                                <small class=""><?php  echo @$patient[$id+1]->fname; ?></small><br>
                                <label for="example-text-input" class="">Date:</label>
                                 <small class=""><?php echo date('d-M-Y',@$patient[$id]->appointment_date); ?></small><br>
                                 <label for="example-text-input" class="">Gender:</label>
                                 <small class=""><?php echo @$patient[$id+1]->gender; ?></small><br>
                                 <label for="example-text-input" class="">Mobile:</label>
                                 <small class=""><?php echo @$patient[$id+1]->mobile; ?></small><br>
                                 <label for="example-text-input" class="">Date of Birth:</label>
                                 <small class=""><?php echo @$patient[$id+1]->dob; ?></small><br>
                                    <label for="example-text-input" class="">Address:</label>
                                    <small><?php echo @$patient[$id+1]->address; ?></small>
                                    <br/>
                                </div>
                            </div>
                        </div>

                        <br> <br>

                      
                        </center>
               </div>


<div class=" col-md-12" style="text-align: center; "><br>
<label for="" class="form-control " style="color:white; text-align: center; background-color:#337ab7;" >Remark:</label>
<input type="text" name="name" class="form-control " style="border:solid 1px black;"  >

    </div>


               <?php } else{  ?>

                  <div class="row">
                     <div class="col-md-12">
                        <div class="white-box text-center">
                           <h3>All Patient Obervation Complete</h3>
                        </div>
                     </div>
                     
                  </div>
                  
               <?php } ?>
               <!-- .row -->
               <!-- .right-sidebar -->
              
               <!-- /.right-sidebar -->
              </div> 
              <br>

                 
  



         </div>  </div>

            

           