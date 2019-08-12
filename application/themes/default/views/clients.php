<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">

<div class="row">

 <?php foreach($clients as $clients){?>

        <div class="col-sm-12 col-md-8 col-lg-3 m-l-r-auto" style="margin-bottom: 34px;">
          <!-- block1 -->
          <div class="block1 hov-img-zoom pos-relative m-b-30 yooo" style="border:2px solid black;
    margin-bottom: 10px;
">
            <img src="<?php echo base_url('uploads/clients'); ?>/<?php echo $clients->client_image;?>" alt="Clients" style="height:140px; ">

       <!--  -->



          </div>
<center><h4 style="font-weight:600; "><?php echo substr($clients->client_name,0,30) ;?></h4></center>
          <!-- block1 -->
          
        </div>

        <?php } ?>
      </div>









	</div>
</section>
	



<script src="<?php echo base_url('assets/theme');?>/javascripts/libs/jquery.min.js" type="text/javascript"></script>


