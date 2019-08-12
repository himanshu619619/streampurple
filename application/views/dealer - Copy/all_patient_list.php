<!--datatable files-->
    <link href="<?php echo base_url('assets/user');?>/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url('assets/user');?>/cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!--end datatable files-->


<div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">All Patient</h4>
                  </div>
                  <!-- /.page title -->
                 <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     
          <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">All Patient</li>
                     </ol>
                  </div>
                  <!-- /.breadcrumb -->
               </div>
               <!-- .row -->
               <div class="row">
                 <div class="col-sm-12">
                        <div class="white-box">
                           
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Patient Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>address</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($all_patient as $value) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $value->name;?></td>
                                            <td><?php echo $value->email;?></td>
                                            <td><?php echo $value->phone_no;?></td>
                                            <td><?php echo $value->address;?></td>
                                            <td><?php echo $value->gender;?></td>
                                            <td>
                                                <a href="<?php echo  base_url('Doctor/patient_profile/'. $value->profile_id);?>"  class="btn btn-info waves-effect waves-light m-r-10 fa fa-eye btn-rounded">&nbsp  View</a>

                                                <button type="button" class="btn btn-danger waves-effect waves-light m-r-10 fa fa-edit btn-rounded disabled">&nbsp  Edit</button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
               </div>
               <!-- .row -->
               
            </div>


