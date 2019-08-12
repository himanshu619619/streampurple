
<div class="mastwrap">

<section class="intro-02-wrap">
	<div class="container-fluid">


		<div class="row">
			
			<div id="works-container" class="works-container white-bg clearfix">
            
  <!-------------------------------------------- Update 16-09-2016  starts here ------------------------------------------------>          

	<!-- start : works-item -->
 
    <!-- end : works-item -->
    
    
    <!-- start : works-item -->
 <?php foreach($products as $products){?>


    <div class="works-item works-item-one-third zoom portrait event" style="margin-bottom:15px;">
            <img alt="" style="width: 300px; height:300px; margin-top: 20px;    border: 2px solid #e4e3e3;"title="" class="img-responsive" src="<?php echo $products->image;?>"/>
            <a  class="" data-gall="portfolio-gallery" href=" <?php echo base_url('Frontend/singleproduct/'. $products->product_id);?> ">   </a>



            <h5 style="padding-top:8px; text-transform: uppercase;"> <?php echo substr($products->product_title,0,38) ;?></h5>
    </div>

      <?php }?>   
  </div>
  <!-- end : works-container -->		

		</div>


	</div>
</section>
	
</div> 


<script src="<?php echo base_url('assets/theme');?>/javascripts/libs/jquery.min.js" type="text/javascript"></script>


