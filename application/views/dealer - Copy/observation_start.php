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
                     <div class="white-box" style=" margin:auto; ">
                         <center><a href="<?php echo base_url('Doctor/observation')?>"  class="btn btn-default orange-circle-button" ><div style="text-align: center;margin: 81px 10px;font-size: 33px;">START</div></a></center>
                     </div>
                  </div>
               </div>
<center>
<div class="row">

                  <div class="col-md-12">
                     <div class="white-box" style=" margin:auto; ">
                <ul style="list-style-type: none;">
                                        <li>
                                        Total Patient: <?php echo $totalpatient; ?>
                                        </li>
                                        <li>

                                      Free Patient:<?php echo $freepatient; ?></li>

                                      <li>Half Patient: <?php echo $halfpaidpatient; ?>
                                   </li> 
                                   <li>full Paid Patient: <?php echo $fullpaidpatient; ?></li>
                                           
                                    </ul>
                                    </div>
                                    </div>
                                    </div></center>
               <!-- .row -->
               <!-- .right-sidebar -->
              
               <!-- /.right-sidebar -->
            </div>

            <style type="text/css">

.orange-circle-button {
   box-shadow: 2px 4px 0 2px rgba(0,0,0,0.1);
   border: .5em solid #01c0c8;
   font-size: 1em;
   line-height: 1.1em;
   color: #ffffff;
   background-color: #01c0c8;
   margin: auto;
   border-radius: 50%;
   height: 15em;
   width: 15em;
   position: relative;

}
.orange-circle-button:hover {
   color:#ffffff;
    background-color: #01c0c8;
   text-decoration: none;
   border-color: #ff7536;
   
}
.orange-circle-button:visited {
   color:#ffffff;
    background-color: #01c0c8;
   text-decoration: none;
   
}
.orange-circle-link-greater-than {
    font-size: 1em;
}

            </style>