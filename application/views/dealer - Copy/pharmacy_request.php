
<style type="text/css">
    
    .error{

    color:red;
}
.borde_color{
  border: 1px solid rgb(19, 196, 236);

}
</style>
<link href="<?php echo base_url('assets/user');?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">

 <link href="<?php echo base_url('assets/user');?>/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
        <!-- Left navbar-header end -->
        <!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
  <div class="row bg-title">
  </div>
      <!-- row -->
  <div class="row">
     <div class="col-sm-12">
       <div class="white-box">        
       <!-- .row -->
       
      <div class="row">
          <div class="col-md-10 p-20">
            <div id="result" class="" >
          
            </div>
              <h3 class="box-title">Request send by Pharmacy</h3>
<?php if ($pharmacy): ?>
  

              <?php foreach ($pharmacy as  $value) {?>
              <div class="media borde_color">
                                
                  <div class="media-left">
                      <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="<?php echo $value->photo; ?>" data-holder-rendered="true" style="width: 94px; height: 94px;"> </a>
                  </div>
                  <div class="media-body">
                      <!--<h4 class="media-heading">Doctor Name</h4> -->
                       <?php echo $value->username; ?>
                 </div>
                 <div class="media-body">
                      <!--<h4 class="media-heading">Doctor email</h4>--> 
                       <?php echo $value->email; ?>
                       <?php echo $value->address; ?><br>
                       <?php echo $value->mobile; ?>

                 </div>
                 <div>
                       
                 </div>
                 
                 <div class="media-body">

            <a href="<?php echo base_url('Doctor/view_pharmacy_detail/'.$value->profile_id);?>" class="btn btn-info">View</a>
                  
            <a class="btn btn-info" onclick="accept_request('<?php echo $value->profile_id; ?>')">Accept</a>
                  <p class="request<?php echo $value->profile_id;?>" style="color: green;"></p>
                 </div>
                
              </div> 
              <?php } ?><?php endif ?>
          </div>
          
      </div>
                        <!-- /.row -->       
      </div>              
   
  </div>
  </div>
 </div>
</div>
            <!-- /.container-fluid -->
      
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    
  
    
    <!-- Custom Theme JavaScript -->
 
    <!-- Calendar JavaScript -->
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/calendar/jquery-ui.min.js"></script>
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/moment/moment.js"></script>
    <script src='<?php echo  base_url('assets/user');?>/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo  base_url('assets/user');?>/plugins/bower_components/calendar/dist/cal-init.js"></script>
    <!--Style Switcher -->
 

 <script type="text/javascript">
   
   function accept_request(pharmacy_id){

    var pharmacy_id = pharmacy_id;

    $.ajax({

             type  : 'post',
             url  : "<?php echo  base_url('Doctor/accept_request');?>",
             data : {pharmacy_id:pharmacy_id},
             success : function(data){
                // alert(data);
              $('.request'+pharmacy_id).html('Request Accept');  
             }
         })
   }
 </script>