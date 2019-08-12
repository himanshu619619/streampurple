<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme');?>/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

  <!-- Header -->
  <header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
      <div class="topbar" >
        <div class="topbar-social">
          <a href="#" class="topbar-social-item fa fa-facebook"></a>
          <a href="#" class="topbar-social-item fa fa-instagram"></a>
          <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
          <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
          <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
        </div>

        <span class="topbar-child1">
          Welcome To Accuprint
        </span>

        <div class="topbar-child2">
          <span class="topbar-email">
            <i class="fa fa-phone" aria-hidden="true"></i> 0124 425 5955 &nbsp;&nbsp;
              <i class="fa fa-envelope" aria-hidden="true"></i>   mail@accuprints.in
          </span>

          <div class="topbar-language rs1-select2">
           
          </div>
        </div>
      </div>

      <div class="wrap_header">
        <!-- Logo -->
        <a href="/" class="logo">
          <img src="<?php echo base_url('assets/theme');?>/images/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu">
            <ul class="main_menu">
              <li>
                <a href="/">Home</a>
                
              </li>

              <li>
                <a href="<?php echo base_url('Frontend/visiting');?>">T-Shirt</a>

  <ul class="sub_menu">

           <?php   $menus= $this->Customer_model->get_tshirt(); 
             # code...
         foreach ($menus as $key => $menus) {
            # code...
           ?>
                 <li><a href="<?php echo base_url('Frontend/allproducts/').$menus->sub_id;?>"><?php echo $menus->category_name ?></a></li>
                  
                   <?php } ?>
                </ul>


              </li>

              <li class=""> 
                <a href="<?php echo base_url('Frontend/caleder');?>">Calender</a>
              </li>

              <li>
                <a href="<?php echo base_url('Frontend/idcard');?>">ID Card</a>
              </li>

              <li>
                <a href="<?php echo base_url('Frontend/idcard');?>">Vising Card</a>
              </li>

             <!--  <li>
                <a href="about.html">About</a>
              </li>
 -->
              <li>
                <a href="<?php echo base_url('Frontend/contact');?>">Contact</a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- Header Icon -->
        <div class="header-icons">
         <a href="https://goo.gl/maps/vTxJwW35wVL2" target="_blank"><img src="<?php echo base_url('assets/theme');?>/images/map.gif" style="width:90px;" alt="map"></a>
         

          <div class="header-wrapicon2">
         

            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">
                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="images/item-cart-01.jpg" alt="IMG">
                 
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                
                    </a>

                    <span class="header-cart-item-info">
                     
                    </span>
                  </div>
                </li>

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="<?php echo base_url('assets/theme');?>/item-cart-02.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                     
                    </a>

                    <span class="header-cart-item-info">
                      
                    </span>
                  </div>
                </li>

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="<?php echo base_url('assets/theme');?>/item-cart-03.jpg" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                     <!--  Nixon Porter Leather Watch In Tan -->
                    </a>

                    <span class="header-cart-item-info">
                     <!--  1 x $17.00 -->
                    </span>
                  </div>
                </li>
              </ul>

              <div class="header-cart-total">
                <!-- Total: $75.00 -->
              </div>

              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
               
             
                </div>

                <div class="header-cart-wrapbtn">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="index.html" class="logo-mobile">
        <img src="<?php echo base_url('assets/theme');?>/images/logo.png" alt="IMG-LOGO">
      </a>

      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
        <!--   <a href="#" class="header-wrapicon1 dis-block">
            <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
          </a> -->

          <span class="linedivide2"></span>

   
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
      <nav class="side-menu">
        <ul class="main-menu">
          

         

       

          <li class="item-menu-mobile">
            <a href="index.html">Home</a>
           <!--  <ul class="sub-menu">
              <li><a href="index.html">Homepage V1</a></li>
              <li><a href="home-02.html">Homepage V2</a></li>
              <li><a href="home-03.html">Homepage V3</a></li>
            </ul> -->
            <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
          </li>

          <li class="item-menu-mobile">
            <a href="<?php echo base_url('Frontend/visiting');?>">T-Shirt</a>
          </li>

          <li class="item-menu-mobile">
            <a href="<?php echo base_url('Frontend/caleder');?>">Calender</a>
          </li>

          <li class="item-menu-mobile">
            <a href="<?php echo base_url('Frontend/idcard');?>">ID CARD</a>
          </li>

        

          <li class="item-menu-mobile">
            <a href="<?php echo base_url('Frontend/contact');?>">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
