
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
                <div class="col-md-6">
                    <div class="panel panel-info">
                     <?php if ($flashdata = $this->session->flashdata('success')){  ?>
                      <div class="alert alert-success">
                       <?php echo $flashdata;  ?>
                      </div>
                    <?php } ?>


                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                               <?php echo form_open_multipart($form_action); ?>
                                   <div class="form-body">
                                        <h3 class="box-title">Upload PDF</h3>
                                        <hr>
                                        <div class="row">
                                          <!-- <img src="<?php echo base_url('assets/theme/images/header_banner'); echo '/'.$banner->banner_name;?>" style="width:100%"> -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <input type="hidden" name="name" value="hello">
                                                    <!-- <label class="control-label">Upload Header of user Banner*(1231*83px)</label> -->
                                                    <input type="file" name="ppt_name" value="" class="form-control" accept=".pdf" required> <span class="help-block"> <?php echo form_error('ppt_name'); ?> </span> </div>


                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
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
            
              <div class="col-md-6">
                  <?php 	
               
  
   $target_path = base_url('assets/theme/images/ppt');
  $target_path2 = base_url('assets/theme/images/ppt/image')."/";
  $filepathto = $target_path.'/'. $active_ppt->ppt_name;
  $imagick = new Imagick();
  $imagick->readImage($filepathto );
  $count = $imagick->getNumberImages();
  for ($x = 1;$x <= $imagick->getNumberImages(); $x++) {
    $imagick->previousImage();
    $imagick->writeImage('ppt/img'.$count.'.jpg');
    
    $count--;
    
  }
?>
                  
                  
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <?php

 $numberslide = $imagick->getNumberImages();
?>

<div class="carousel-inner" id-"hello">
<div class="carousel-item active";?>" >
  <img class="d-block w-100" src="<?php echo base_url();?>ppt/img1.jpg" alt="First slide" >
</div>


</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>   
                
                  
                  
                  
              </div>
            
          
            <!-- /.row -->
</div>

<div class="row">
<div class="col-sm-12">
      <div class="white-box">
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  
                      <div class="row" style="">
                        <div class="col-lg-4">
                              <div class="">
                                 
                                 <div class="box-header with-border">
           




      
          

           
         </div>
        

                              </div>
                          </div>
                         <div class="col-lg-4">

                         </div>
                         <div class="col-lg-2">

<?php if($vote_status_status == 1){     ?>              
            <button type="button" class="btn btn-danger" id="vote" onclick="status_PPT()" >STOP PDF</button>
            <?php   } else { ?>  
              <button type="button" class="btn btn-success" id="vote" onclick="status_PPT()" >START PDF</button>
              <?php   } ?>  
</div>
                          <div class="col-lg-2">
                              <div class="">
                                 
                                 <div class="box-header with-border">
            <a class="btn btn-info fa fa-download button-block" type="button" onclick="tableToExcel('testTable', 'W3C Example Table')"> Export to Excel</a>
         </div>


                              </div>
                          </div>
                         



                      </div>
                      
                     
                  
              </div>
            
            
          </div>
      </div>
  </div>

  <div class="col-sm-12">
      <div class="white-box">
          
          <div class="table-responsive">
              <table id="testTable" class="display table table-bordered ">
                  <thead>
                      <tr>
                          <th>S.no</th>
                          <th>PDF name</th>
                          <th>Created at</th>
                          
                        <th>status</th>
                            <th>action</th>
                          
                          
                         
                     
                      </tr>
                  </thead>
                  <tbody>
                  <?php if($ppt) { ?>
                     <?php $no=1; foreach ($ppt as $key => $value) { ?>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $value->ppt_name; ?></td>
                           <?php if($value->status == 1){?>
                          <td> 

                            <a href="<?php echo base_url('admin/Backend/ppt_status/'.$value->status.'/' .$value->ppt_id);?>"><button class="btn btn-success btn-xs"><i class="fa fa-check " title="Status active"></i>&nbsp;Active&nbsp; </button> </a>
                           </td>
                            <?php }else{?>
                          <td>  <a href="<?php echo base_url('admin/Backend/ppt_status/'.$value->status.'/' .$value->ppt_id);?>"><button class="btn btn-danger btn-xs"><i class="fa fa-check " title="Status active"></i>&nbsp;Dective </button></td>
                            <?php    }?>
                           
                             <td><?php echo $value->created_at; ?></td>
                         

                         
                           
                                                 
                          <td class="text-nowrap">
                          
                              <a href="<?php echo base_url('admin/backend/ppt_delete/'.$value->ppt_id)?>" onclick="return confirm('are you sure');" data-toggle="tooltip" > <i class="fa fa-close text-danger"></i> </a>
                          </td>
                      </tr>
                      <?php } ?>

                      <?php }else{ ?> 
                         <tr>
                         <td colspan="6"> <center>   <h5>No Record Found</h5></center></td>
                        </tr>
                      <?php } ?>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>

                   
                </div>
            </div>


           
        </div>

    </div>
<script type="text/javascript">
var tableToExcel = (function() {
var uri = 'data:application/vnd.ms-excel;base64,'
 , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
 , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
 , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
return function(table, name) {
 if (!table.nodeType) table = document.getElementById(table)
 var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
 window.location.href = uri + base64(format(template, ctx))
}
})()
</script>

<script type="text/javascript">

$(document).ready( function () {
$('#testTable').DataTable();
});
</script>


<script src="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
<?php echo 'var ppt_status = '.$vote_status_status.';'; ?>
function status_PPT() {
 $.ajax({
         type: "POST",
         url: "<?php echo  base_url('admin/Backend/ppt_update_status');?>",
         data: {ppt_status:ppt_status},
      
         success: function(data){
            // alert(data);
            ppt_status = data;
            if (data == 1) {
              $('#vote').html('STOP PPT').removeClass('btn-success').addClass('btn-danger');

            } else {
              $('#vote').html('START PPT').removeClass('btn-danger').addClass('btn-success');
            }  
         },
         error:function(e, ts, et){ alert(ts.responseText);}
     });
}


</script>
<script>
function select_pdf(pdf_image_name) {
//alert(pdf_image_name);

 $.ajax({
         type: "POST",
         url: "<?php echo  base_url('admin/Backend/insert_pdf');?>",
         data: {pdf_image_name:pdf_image_name},
      
         success: function(data){
            //alert(data);
              
         },
         error:function(e, ts, et){ alert(ts.responseText);}
     });
}

</script>

