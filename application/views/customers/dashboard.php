






<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title" style=" color:red;"><marquee><?php echo $announcement->announcement_name; ?></marquee></h4>
                  </div>
                  <!-- /.page title -->
                 
               </div>
                <img src="<?php echo base_url('assets/theme');?>/images/header_banner/<?php echo $banner->banner_name; ?>" class="img-responsive" style="filter: border: 2px solid rgba(0,0,0,0.1);">
              <!-- .row -->
             <div class="row">  
                <div class="col-md-6">
    


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
 <div class="col-md-6" id="hide_ppt_button">
 <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=<?php echo base_url('assets/theme/images/ppt'); echo "/"; echo $ppt->ppt_name; ?>' width='100%' height='300px' frameborder='0'></iframe>
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
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Name</label>
                                                        <input type="text" name="name"class="form-control" placeholder="Enter Name"> <span class="help-block"> <?php echo form_error('name'); ?> </span> </div>


                                                </div>
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
setInterval(hide_ppt_button, 3000); 
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
             error:function(e, ts, et){ alert(ts.responseText);}
         });
    }
</script>