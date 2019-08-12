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
<style type="text/css">
       .error{color:red;}
</style>
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
                <div class="top-left-part"><a class="logo" href="<?php echo base_url('Customers/index');?>"><b></b><span class="hidden-xs"><strong style="font-size:30px;">Amass</strong></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <!-- <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form> -->
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                 
                    <!-- /.dropdown -->
                 
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->

               <li class="dropdown">
                <?php if($user->photo){?>
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo $user->photo; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $user->username; ?></b> </a><?php } else { ?>

                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('assets/user');?>/plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $user->username; ?></b> </a>

                        <?php } ?>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <?php $array=array('class' => 'ti-user')?>
                            <li><?php echo anchor('Serviceagent/serviceagent_profile','My Profile',$array)?></li>
                          <!--   <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li> -->
                            <li><a href="<?php echo base_url('Serviceagent/account_setting') ?>"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="<?php echo base_url('serviceagent/logout') ?>"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle" > <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
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
                 <br>
                    <li> <a href="<?php echo base_url('extent_warrenty'); ?>" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
                  
                    <li> <a href="<?php echo base_url('serviceagent/AMC_purchase') ?>" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu">AMC Purchase Offers <span class="fa arrow"></span></span></a>
                   
                    </li>

<li> 
                        <a href="<?php echo base_url('serviceagent/extent_warrenty') ?>" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu">Extend Warrenty Purchase  <span class="fa arrow"></span></span></a>
                        
                      

                      </li>



               


                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Book A Repair Service <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li> <a href="<?php echo  base_url('serviceagent/already_under_amc');?>">Already Under AMC</a> </li>
                             
                            <li> <a href="<?php echo  base_url('serviceagent/not_in_amc');?>">Not in AMC</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Book A Demo <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           
                            <li> <a href="<?php echo  base_url('serviceagent/washing_machine_demo');?>">Washing Machine DEMO</a> </li>
                             
                            <li> <a href="<?php echo  base_url('serviceagent/ac_installation');?>">AC Installation</a> </li>
                        </ul>
                    </li>



                   </ul>
               

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