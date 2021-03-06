
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
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
          <?php if($feedback=$this->session->flashdata('feedback')){ ?>
              <div class="alert alert-success"> <?php echo $feedback; ?></div>
          <?php } ?>

 <div class="row">
   <div class="col-sm-12">
         <div class="white-box">
             <div class="row">
                 <div class="col-sm-12 col-xs-12">
                     <?php echo form_open('admin/company_admin/all_company_list',array('method'=>'get')); ?>    
                         <div class="row">
                         
                             <div class="col-lg-4">
                                 <div class="input-group">
                                    
                                     <input type="text" class="form-control" placeholder="company Name" name="company_name">
                                 </div>
                             </div>

                             <div class="col-lg-4">
                                 <div class="">
                                    
                                    <input type="date" class="form-control" name="created">
                                 </div>
                             </div>
                            
                             <div class="col-lg-2">
                                 <div class="input-group">
                                    
                                     <button type="submit" class="btn btn-info">Search</button>
                                 </div>
                             </div>
                             <div class="col-lg-2">
                                 <div class="">
                                    
                                    <div class="box-header with-border">
               <a class="btn btn-primary fa fa-download button-block" type="button" onclick="tableToExcel('testTable', 'W3C Example Table')"> Export to Excel</a>
            </div>
                                 </div>
                             </div>
                         </div>
                         
                        
                     </form>
                 </div>
               
               
             </div>
         </div>
     </div>

     <div class="col-sm-12">
         <div class="white-box">
             
             <div class="table-responsive">
                 <table id="testTable" class="table table-bordered">
                     <thead>
                         <tr>
                             <th>S.no</th>
                             <th>company Name</th>
                             <th>Country</th>
                             <th>State</th>
                             <th>City</th>
                             <th>Registration No.</th>
                             <th>Join Date</th>
                             <th>Supported Documents</th>
                             <th>Status</th>
                             <th class="text-nowrap">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        <?php $no=1; foreach ($company as $key => $value) { ?>
                         <tr>
                             <td><?php echo $no++; ?></td>
                             <td><?php echo $value->company_name; ?></td>
                             <td><?php echo $value->country; ?></td>
                             <td><?php echo @$state_option[$value->state]; ?></td>
                             <td><?php echo @$city_option[$value->cities]; ?></td>
                             <td><?php echo $value->registration_no; ?></td>
                             <td><?php echo $value->created; ?></td>
                             <td><img height="70" src="<?php echo $value->regitration_picture; ?>"></td>
                             <?php if($value->company_status==0){ ?>
                             <td><a href="<?php echo base_url('admin/company_admin/verify_company/'.$value->profile_id) ?>" class="btn-xs btn btn-danger">Unverify</button></td>
                             <?php }else{ ?>
                               <td><a href="<?php echo base_url('admin/company_admin/unverify_company/'.$value->profile_id) ?>" class="btn-xs btn btn-info" onclick="">Verify</a></td>
                            <?php } ?>
                             
                             <td class="text-nowrap">
                                 <a href="<?php echo base_url('admin/company_admin/view_company/'.encode_url($value->profile_id)) ?>" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                 <a href="<?php echo base_url('admin/company_admin/delete_company/'.$value->profile_id)?>" onclick="return confirm('are you sure');" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                             </td>
                         </tr>
                         <?php } ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- .row -->
<!-- .right-sidebar -->

<!-- /.right-sidebar -->
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


