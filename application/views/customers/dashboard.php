<style>
@media (max-width:500px){
    .testing{display:block!important;}
}
</style>
<<<<<<< HEAD




=======
>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1


<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-titles">
                  <!-- .page title -->
                  <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title" style=" color:red;"><marquee class="message"><?php echo $announcement->announcement_name; ?></marquee></h4>
                  </div>
                  <!-- /.page title -->
                 
               </div>
                <img src="<?php echo base_url('assets/theme');?>/images/header_banner/<?php echo $banner->banner_name; ?>" class="img-responsive" style=" border: 2px solid rgba(0,0,0,0.1);">
              <!-- .row -->
             <div class="row testing" style="display:flex;">  
<<<<<<< HEAD
                <div class="" style="flex:1;">
=======
            
                <div class=""  style="flex:1;">
>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
    
 <center><div id='wowza_player' style="overflow:hidden;"></div></center>

<script id='player_embed' src='//player.cloud.wowza.com/hosted/mpvxxjrn/wowza.js' type='text/javascript'></script>

<<<<<<< HEAD
                    
   </div>
 <div class="pdf_image" id="hide_ppt_button" style="flex:1;">
 <img src="<?php echo base_url('ppt'); ?>/img<?php echo $get_pdf_image->pdf_image_name; ?>.jpg" style="width:100%">
=======
                        <div class="video-section">
                       

                    <div id="bg_player_location">

<a href="http://www.adobe.com/go/getflashplayer">

<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />

</a>

</div>

<script type="text/javascript" src="http://player.bc.cdn.bitgravity.com/10/jquery.js"></script>

<script type="text/javascript" src="http://player.bc.cdn.bitgravity.com/10/functions.js"></script>

<script type="text/javascript" src="http://player.bc.cdn.bitgravity.com/10/swfobject.js"></script>

<script type="text/javascript">

var flashVars = {};

flashVars.File = "http://cam.live.cdn.bitgravity.com/cam/live/Patna_Sahib_128";

flashVars.Mode = "live";

flashVars.AutoPlay = "true";

flashVars.streamType = "live";

flashVars.ForceReconnect = "0";

var params = {};

params.allowFullScreen = "true";

params.allowScriptAccess = "always";

swfobject.embedSWF(info.BitGravityswf, "bg_player_location", "640", "500", info.swfVersionStr, info.xiSwfUrlStr, flashVars, params, attributes);

</script>
                    </div>
   </div>

 <div class="" id="hide_ppt_button" style="flex:1;">
 
<!-- <img src="<?php echo base_url('ppt'); ?>/img<?php echo $get_pdf_image->pdf_image_name; ?>.jpg" style="width:100%"> -->

>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
 </div>

 </div>

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
                                            <h3 class="box-title">Have a query? Fill in details below</h3>
                                            <hr>
<<<<<<< HEAD
                                               <div class="row">
                                            <!-- <div class="col-md-12">-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="control-label">Name</label>-->
                                                <!--        <input type="text" name="name"class="form-control" placeholder="Enter Name"> <span class="help-block"> <?php echo form_error('name'); ?> </span> </div>


                                                </div>-->
                                                
                                                 <input type="hidden" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $get_user_detail->fname; ?> ">  
=======
                                            <div class="row">
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Name</label>
                                                        <input type="text" name="name"class="form-control" placeholder="Enter Name"> <span class="help-block"> <?php echo form_error('name'); ?> </span> </div>


                                                </div> -->

                                                <input type="hidden" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $get_user_detail->fname; ?> "> 
>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label class="control-label">Massage*</label>
                                                        <textarea name="message" rows="4" class="form-control" placeholder="Enter Message"></textarea> 

                                                        <?php echo form_error('message'); ?></span> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                        

                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                            
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
  <script>
<<<<<<< HEAD
setInterval(hide_ppt_button, 100); 
=======
setInterval(hide_ppt_button, 1000); 
>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
function hide_ppt_button() {
    var ppt_status = 1;
     $.ajax({
             type: "POST",
             url: "<?php echo base_url('customers/get_ppt_buttons');?>",
             data: {ppt_status},
          
             success: function(data){
                
                 if(data == 1){
                      $("#hide_ppt_button").show();
                }else{
                    //alert(data);
                     $("#hide_ppt_button").hide();
                 }

             },
<<<<<<< HEAD
             error:function(e, ts, et){ }
         });
    }
</script>

<script>
setInterval(pdf_image_name, 1000); 
=======
             error:function(e, ts, et){ alert(ts.responseText);}
         });
    }
</script>
<script>
setInterval(pdf_image_name(),message(), 1000); 
>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
function pdf_image_name() {
    var pdf_image_name = 1;
     $.ajax({
             type: "POST",
             url: "<?php echo base_url('customers/get_pdf_image_name');?>",
             data: {pdf_image_name},
          
             success: function(data){
<<<<<<< HEAD
                var ab = `<img src='<?php echo base_url('ppt'); ?>/img${data}.jpg' style='width:100%'>`;
                //alert(ab);
                 $('.pdf_image').html(ab);        
                 },
             error:function(e, ts, et){ }
=======
                
                $('.pdf_image').html("<img src='<?php echo base_url('ppt'); ?>/imgdata.jpg' style='width:100%'>");
                
             },
             error:function(e, ts, et){ alert(ts.responseText);}
>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
         });
    }
</script>

<script>
<<<<<<< HEAD
setInterval(message, 1000); 
=======

>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
function message() {
    var announcement_name = 1;
     $.ajax({
             type: "POST",
             url: "<?php echo base_url('customers/getmessage');?>",
             data: {announcement_name},
          
             success: function(data){
                
                $('.message').html(data);
                
             },
<<<<<<< HEAD
             error:function(e, ts, et){ }
         });
    }
</script>
=======
             error:function(e, ts, et){ alert(ts.responseText);}
         });
    }
</script>


>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
