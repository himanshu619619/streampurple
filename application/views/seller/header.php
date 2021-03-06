<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/user');?>/plugins/images/favicon.png">
    <title><?php echo $app_name; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/user');?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user');?>/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('assets/user');?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url('assets/user');?>/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url('assets/user');?>/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/user');?>/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url('assets/user');?>/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="<?php echo base_url('Doctor/index');?>"><b><img src="<?php echo base_url('assets/user');?>/plugins/images/logo.png" alt="home" /></b><span class="hidden-xs"><strong>Docmed</strong></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url('assets/user');?>/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                           
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->

               <li class="dropdown">
                <?php if($user->photo){?>
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo $user->photo; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $user->username; ?></b> </a><?php } else { ?>

                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('assets/user');?>/plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $user->username; ?></b> </a>

                        <?php } ?>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <?php $array=array('class' => 'ti-user')?>
                            <li><?php echo anchor('Doctor/doc_profile','My Profile',$array)?></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="<?php echo base_url('Doctor/account_setting') ?>"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="<?php echo base_url('Doctor/logout') ?>"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                  <!--   <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="<?php echo base_url('assets/user');?>/plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Dr. Steve Gection<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-small-cap m-t-10">--- Main Menu</li> -->
                    <li> <a href="<?php echo base_url('Doctor'); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
                  
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            
                             <li> <a href="<?php echo base_url('Doctor/add_patient');?>">Add Patient Booking</a> </li>

                                 <li> <a href="<?php echo base_url('Doctor/observation_start') ?>">Observation</a> </li>

                          <!--   <li> <a href="<?php echo base_url('Doctor/clinic_booking') ?>">Clinic Patient Booking</a> </li> -->

                              <li> <a href="<?php echo base_url('Doctor/patient_booking') ?>">All Patient Booking</a> </li>
 <li> 
                                <a href="<?php echo base_url('Doctor/Patient_limit');?>" class="waves-effect"><i class=""></i> <span class="hide-menu">limit of patient booking </span></a>
                               
                            </li>
                         
                           

                          <!-- 
                            <li> <a href="<?php echo base_url('Doctor/book_appointment')?>">Booking  Appointment</a> </li> -->

                        
                             

                            
                           


                        </ul>
                    </li>

<li> 
                        <a href="" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu">clinic  <span class="fa arrow"></span></span></a>
                        
                             <ul class="nav nav-second-level">


                 <?php

                  $doctor_id= $this->doctor_ref->get_profile_id();
                  $add_clinic = $this->doctor_ref->check_doctor_clinic($doctor_id);
                  ?>          
<?php if(!$add_clinic){?>


 <li > 
                                <a href="<?php echo base_url('Doctor/add_clinic');?>" class="waves-effect"><i class=""></i> <span class="hide-menu">Add Clinic </span></a>
                               
                            </li>

                            <?php } else ?>
<?php { ?>

                                <li> 
                                <a href="<?php echo base_url('Doctor/view_clinic');?>" class="waves-effect"><i class=""></i> <span class="hide-menu">View Clinic </span></a>
                               
                            </li>

 <?php } ?>
                          
                           
<li> 
                                <a href="<?php echo base_url('Doctor/join_other_clinic');?>" class="waves-effect"><i class=""></i> <span class="hide-menu">Join other Clinic </span></a>
                               
                            </li>



                        </ul>

                      </li>


                    <li> 
                        <a href="" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Order Medicine <span class="fa arrow"></span></span></a>
                        
                             <ul class="nav nav-second-level">
                            <li> 
                                <a href="<?php echo base_url('Doctor/order_medicine_to_doctor');?>">Order Medicine To Pharmacy </a> 
                            </li>
                            <li> 
                                <a href="<?php echo base_url('Doctor/pharmacy_request');?>">Request From Pharmacy</a> 
                            </li>
                           
                        </ul>

                      </li>

                    

                     <li> 
                        <a href="" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Add Medicine <span class="fa arrow"></span></span></a>
                        
                             <ul class="nav nav-second-level">
                            <li> 
                                <a href="<?php echo base_url('Doctor/add_doctor_medicine');?>" class="waves-effect"><i class="fa fa-plus"></i> <span class="hide-menu">Add Medicine </span></a>
                               
                            </li>
                            <li> 
                               <a href="<?php echo base_url('Doctor/search_medicine');?>" class="waves-effect"><i class="fa fa-search"></i> <span class="hide-menu">Search Medicine </span></a>
                            </li>
                           
                        </ul>

                      </li>


                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li> <a href="<?php echo  base_url('Doctor/all_patient_list');?>">All Patients</a> </li>
                             
                        
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Activity <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><?php echo anchor('Doctor/doctor_schedule','Working Schadule');?></li>
                             <li> <a href="<?php echo base_url('Doctor/doctor_services');?>">Services</a> </li>
                          
                       
                    </li></ul>
                     <li> <a href="<?php echo base_url('Doctor/reminder'); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Reminder<span class="fa arrow"></span> </span></a></li>

 </ul>
         <!--            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="#">Payment Report</a></li>
                            <li> <a href="#">Income Report</a></li>
                            <li> <a href="#">Sales Report</a></li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="#">Payments</a></li>
                            <li> <a href="#">Add Payment</a></li>
                            <li> <a href="#">Patient Invoice</a></li>
                        </ul>
                    </li> -->

                </ul>
            </div>
        </div>